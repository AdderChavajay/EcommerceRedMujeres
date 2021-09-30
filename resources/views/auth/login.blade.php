<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="px-4 py-3">
            @csrf

            <div class=" form-group">
                <x-label for="email" :value="__('Correo electronico')" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="email@ejemplo.com" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Contraseña')" />
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-button class="ml-3">
                    {{ __('Iniciar sesion') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
