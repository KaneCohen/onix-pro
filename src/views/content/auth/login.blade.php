<x-onixpro::layout.login>
    <x-onixpro::auth.authconteiner
    title="Login"
    image="/vendor/Onixpro/image/onixpro.png"
    >
        <x-slot name="form">
            <x-onixpro::form.form action="{{ route('onixpro.login.user') }}" >
                <div class="px-5 py-7">
                    <x-onixpro::form.email name="email" label="Email" />
                    <x-onixpro::form.password name="password" label="Password" />
                    <x-onixpro::form.submit />
                </div>
            </x-onixpro::form.form>
        </x-slot>

        <x-slot name="links">
            <div class="grid grid-cols-2 gap-1">
                <div class="text-center sm:text-center whitespace-nowrap">
                    <x-onixpro::form.link route="{{ route('onixpro.forgot-password') }}" name="Forgot Password" />
                </div>
                <div class="text-center sm:text-center whitespace-nowrap" >
                    <x-onixpro::form.link route="{{ route('onixpro.register') }}" name="Register" />
                </div>
                <div class="text-center sm:text-center whitespace-nowrap" >
                    <x-onixpro::form.dark_light />
                </div>
            </div>
        </x-slot>
    </x-onixpro::auth.authconteiner>

</x-onixpro::layout.login>
