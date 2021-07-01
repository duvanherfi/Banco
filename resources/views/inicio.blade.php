@extends("layouts.app")
@section("titulo", "Inicio")

@section("contenido")
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row justify-content-center text-center">
        <div class="col-md-4 me-4" style="max-width:300px">
            <a data-bs-toggle="modal" href="#modal" role="button">
                <div class="img-contenedor">
                    <img src="{{ asset('img/money.svg') }}"
                         class="img-thumbnail" style="background-color: inherit; width:300px; height:300px;"
                         alt="Transferencia Bancaria">
                </div>
                <h1>Transacciones Bancarias</h1>
            </a>
        </div>
        <div class="col-md-4 me-4" style="max-width:300px">
            <a href="{{ route("cuentas") }}">
                <div class="img-contenedor">
                    <img src="{{ asset('img/transaction.svg') }}"
                         class="img-thumbnail" style="background-color: inherit; width:300px; height:300px;"
                         alt="Transferencia Bancaria">
                </div>
                <h1>Estado de la cuenta</h1>
            </a>
        </div>

        <div class="col-md-4" style="max-width:300px">
            <a href="{{ route('logout') }}" onclick="return confirm('Desea cerrar la sesión?');">
                <div class="img-contenedor">
                    <img src="{{ asset('img/logout.svg') }}" class="img-thumbnail"
                         style="background-color: inherit; width:300px; height:300px;" alt="Transferencia Bancaria">
                </div>
                <h1>Salir</h1>
            </a>
        </div>

    </div>

    <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Seleccione el tipo de transferencia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <a
                                        href="{{route('transferencia_registrar')}}?modo=propias"
                                        class="btn btn-info my-3">Cuentas
                                    propias
                                </a>
                                <a
                                        href="{{route('transferencia_registrar')}}?modo=externas"
                                        class="btn btn-success my-3">
                                    Cuentas externas
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal">Regresar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
