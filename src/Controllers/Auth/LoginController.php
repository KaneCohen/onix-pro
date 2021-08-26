<?php

namespace Mariojgt\Onixpro\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Mariojgt\Onixpro\Models\User;
use Mariojgt\Onixpro\Events\UserVerifyEvent;

class LoginController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        return view('onixpro::content.auth.login');
    }

    /**
     * @return [blade view]
     */
    public function register()
    {
        return view('onixpro::content.auth.register');
    }

    /**
     * Try login the user.
     *
     * @param Request $request
     *
     * @return [blade view]
     */
    public function login(Request $request)
    {
        // Validate the user
        $request->validate([
            'email'    => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $credentials = $request->only('email', 'password');

        // Try login Note the you have the guard
        if (Auth::guard(config('onixpro.user_guard'))->attempt($credentials)) {
            return Redirect::route('onix-home')->with('success', 'Welcome :)');
        } else {
            return  Redirect::back()->with('error', 'Credentials do not match');
        }
    }

    /**
     * Logout the user and send to the login page.
     *
     * @param Request $request
     *
     * @return [redirect]
     */
    public function logout(Request $request)
    {
        Auth::logout();

        return Redirect::route('onixpro.login')->with('success', 'By :)');
    }

    /**
     * Verify the user account based in the link.
     *
     * @param Request $request
     * @param mixed   $userId
     * @param mixed   $expiration
     *
     * @return [Redirect]
     */
    public function verify(Request $request, $userId, $expiration)
    {
        $user       = User::findOrFail($userId);
        $userId     = decrypt($userId);
        $expiration = decrypt($expiration);
        $nowDate    = Carbon::now();

        // Check if is expired
        if ($nowDate > $expiration) {
            return Redirect::route('onixpro.login')->with('error', 'Link Expired!');
        }

        // Check if the user has been verify
        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
            event(new Verified($user));
        }

        // Return to the the login page as success
        return Redirect::route('onixpro.login')->with('success', 'User verify with success!');
    }

    /**
     * Double check if the user needs verification before go the the next request.
     *
     * @return [Redirect]
     */
    public function needVerify()
    {
        // In here we check if we want to send the user a need verification
        if (config('onixpro.send_verification')) {
            // Send the verification to the user
            UserVerifyEvent::dispatch(Auth::user());
        }

        // Logout the user and redirect him to the home page
        Auth::logout();

        // Return to the the login page as success
        return Redirect::route('onixpro.login')->with('error', 'User need to be verify!');
    }
}
