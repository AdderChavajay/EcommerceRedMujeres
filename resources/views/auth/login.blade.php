@extends('layauts.plantilla')

@section('title','Login')

@section('main')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('images/icons/icons/Logo Mercado.ico')}}" alt="" class=" w-40 h-40" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="">
            @csrf

            <div class="form-group ">
                <x-label for="email" :value="__('Correo electronico')" />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                        autofocus placeholder="email@ejemplo.com" />
                </div>

            </div>

            <!-- Password -->
            <div class="form-group my-4">
                <x-label for="password" :value="__('Contraseña')" />

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                    </div>
                    <x-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif --}}

                <button class="btn btn-dark mx-3">
                    {{ __('Iniciar sesion') }}
                </button>

                <a href="{{route('register')}}" class="btn btn-dark mx-3">
                    crear cuenta
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection