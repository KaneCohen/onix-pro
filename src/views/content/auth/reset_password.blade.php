<x-onixpro::layout.login>
    <x-onixpro::auth.authconteiner title="Password Change Reset" >
        <x-slot name="form">
            <x-onixpro::form.form action="{{ route('onix.password.change') }}" >
                <div class="px-5 py-7">
                    <input type="hidden" name="token" value="{{ $token }}" >
                    <x-onixpro::form.email name="email" label="Email" value="{{ Request('email') }}" />
                    <x-onixpro::form.password name="password" label="Password" />
                    <x-onixpro::form.password name="password_confirmation" label="Password Confirm" />
                    <x-onixpro::form.submit name="Reset" />
                </div>
            </x-onixpro::form.form>
        </x-slot>

        <x-slot name="links">
            <div class="px-5 py-7">
                <div class="grid grid-cols-1 gap-3">
                    <x-onixpro::form.link route="{{ route('onxi.login') }}" name="Login" />
                </div>
            </div>
        </x-slot>
    </x-onixpro::auth.authconteiner>
</x-onixpro::layout.login>
