<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>

                <div class="form-group ">
                    <x-label for="email" :value="__('Correo electronico')" />
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus placeholder="email@ejemplo.com" />
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="" class="btn btn-primary">Aceptar</a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>