<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
            <img src="{{ asset('main/images/logo.png') }}" alt="image">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="tipo" value="Tipo" />
                <select id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo')" required
                    autofocus autocomplete="tipo">
                    <option value="" hidden>Seleccione un tipo</option>
                    <option value="docente">Docente</option>
                    <option value="estudiante">Estudiante</option>
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="nombres" value="Nombres" />
                <x-jet-input id="nombres" class="block mt-1 w-full" type="text" name="nombres" :value="old('nombres')"
                    required autofocus autocomplete="nombres" />
            </div>
            <div class="mt-4">
                <x-jet-label for="apellidos" value="Apellidos" />
                <x-jet-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos"
                    :value="old('apellidos')" required autofocus autocomplete="apellidos" />
            </div>
            <div class="mt-4">
                <x-jet-label for="direccion" value="Dirección" />
                <x-jet-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                    :value="old('direccion')" required autofocus autocomplete="direccion" />
            </div>
            <div class="mt-4">
                <x-jet-label for="telefono" value="Teléfono" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="text" name="telefono"
                    :value="old('telefono')" required autofocus autocomplete="telefono" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" required />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
