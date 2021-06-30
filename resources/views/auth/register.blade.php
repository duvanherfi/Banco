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
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">
                        {{ __('messages.name') }}
                    </label>
                    <input
                        type="text" class="form-control" id="name" value="{{old('name')}}"
                        name="name" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">
                        {{ __('messages.email') }}
                    </label>
                    <input
                        type="email" class="form-control" id="email" value="{{old('email')}}"
                        name="email" required autofocus>
                </div>
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
                    <input id="password" type="password" name="password" autocomplete="new-password"
                           value="{{old('password')}}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">
                        {{ __('messages.password_confirmation') }}
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                           value="{{old('password_confirmation')}}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <button type='submit' class='btn btn-dark'>
                        {{ __('messages.register') }}
                    </button>
                </div>

                <div class="mb-3">
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('messages.already_registered') }}
                    </a>
                </div>

            </form>
        </div>
    </div>
@endsection
