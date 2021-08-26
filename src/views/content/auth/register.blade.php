<x-onixpro::layout.login>
    <x-onixpro::auth.authconteiner title="Register Onix User" >
        <x-slot name="form">
            <x-onixpro::form.form action="{{ route('onix.register.user') }}" >
                <div class="px-5 py-7">
                    <x-onixpro::form.text name="name" label="Name" />
                    <x-onixpro::form.email name="email" label="Email" />
                    <x-onixpro::form.password name="password" label="Password" />
                    <x-onixpro::form.password name="password_confirmation" label="Password Confirm" />
                    <x-onixpro::form.submit name="Register" />
                </div>
            </x-onixpro::form.form>
        </x-slot>

        <x-slot name="links">
            <div class="px-5 py-7">
                <div class="grid grid-cols-1 gap-3">
                    <x-onixpro::form.link route="{{ route('onixpro') }}" name="Login" />
                </div>
            </div>
        </x-slot>
    </x-onixpro::auth.authconteiner>
</x-onixpro::layout.login>

