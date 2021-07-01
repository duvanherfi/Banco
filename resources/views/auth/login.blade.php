@extends("layouts.app")
@section('titulo', 'Inicio de Sesión')

@section("miga_de_pan")
@endsection

@section("contenido")
    <div class="text-center" style="max-width: 330px; padding: 15px; margin: auto;">

        <div class="row">
            <a href="/">
                <img src="{{ asset('img/bank.svg') }}" style="height: 100px !important;">
            </a>
        </div>

        @include("layouts.messages")

        <div class="row">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="identificacion" class="form-label">
                        {{ __('messages.identificacion') }}
                    </label>
                    <input
                        type="number" class="form-control" id="identificacion" value="{{old('identificacion')}}"
                        name="identificacion" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">
                        {{ __('messages.password') }}
                    </label>
                    <input id="password" type="password" name="password" autocomplete="current-password"
                           value="{{old('password')}}" class="form-control" required>
                </div>
                <div class="mb-3 form-check" align="left">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember" value="{{old('password')}}">
                    <label class="form-check-label" for="remember_me">{{ __('messages.remember_me') }}</label>
                </div>
                <div class="mb-3">
                    <a href="{{ route("register") }}" class="btn btn-dark">
                        Registrarse
                    </a>

                    <button type='submit' class='btn btn-light'>
                        {{ __('messages.log_in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
