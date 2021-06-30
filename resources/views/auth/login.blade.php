@extends("layouts.app")
@section('titulo', 'Inicio de Sesión')

@section("contenido")
    <div class="text-center" style="max-width: 330px; padding: 15px; margin: auto;">

        <div class="row">
            <a href="/">
                <img src="{{ asset('img/bank.svg') }}" style="height: 100px !important;">
            </a>
        </div>

        <div class="row my-1">
            <!-- Validation Errors -->
            @if ($errors->any())
                <div>
                    <div class="alert alert-danger" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill"/>
                        </svg>
                        <div>
                            <h4 class="alert-heading">
                                {{ __('messages.errors_title') }}
                            </h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        </div>
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
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                    <label class="form-check-label" for="remember_me">{{ __('messages.remember_me') }}</label>
                </div>

                <div class="mb-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('messages.olvidar') }}
                        </a>
                    @endif
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
