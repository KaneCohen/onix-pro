<x-onixpro::layout.login>
    <x-onixpro::auth.authconteiner title="Password Reset" >
        <x-slot name="form">
            <x-onixpro::form.form action="{{ route('onix.password-reset') }}" >
                <div class="px-5 py-7">
                    <x-onixpro::form.email name="email" label="Email" />
                    <x-onixpro::form.submit />
                </div>
            </x-onixpro::form.form>
        </x-slot>

        <x-slot name="links">
            <div class="px-5 py-7">
                <div class="grid grid-cols-1 gap-3">
                    <x-onixpro::form.link route="{{ route('onix.login') }}" name="Login" />
                </div>
            </div>
        </x-slot>
    </x-onixpro::auth.authconteiner>
</x-onixpro::layout.login>
