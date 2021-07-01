@extends("layouts.app")
@section("titulo", "Inicio")

@section("miga_de_pan")
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("inicio") }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route("inicio") }}">Transferencias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrar</li>
        </ol>
    </nav>
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
            <form method="POST" action="{{ route('transferencia_guardar') }}">
                @csrf

                <div class="mb-3">
                    <label for="cuenta_origen_id" class="form-label">
                        Cuenta de origen
                    </label>
                    <select class="form-select" id="cuenta_origen_id" name="cuenta_origen_id"
                            aria-label="Default select example" required>
                        <option value="">Seleccione una cuenta</option>
                        @foreach($cuentas as $cuenta)
                            <option value="{{ $cuenta->id }}">{{ $cuenta->numero }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cuenta_destino_id" class="form-label">
                        Cuenta Destino
                    </label>
                    <select class="form-select" id="cuenta_destino_id" name="cuenta_destino_id"
                            aria-label="Default select example" required>
                        <option value="">Seleccione una cuenta</option>
                        @foreach($cuentas2 as $cuenta)
                            <option value="{{ $cuenta->id }}">{{ $cuenta->numero }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="monto" class="form-label">
                        monto
                    </label>
                    <input
                            type="number" class="form-control" id="monto" value="{{old('monto')}}"
                            name="monto" required autofocus>
                </div>

                <div class="mb-3">
                    <button type='submit' class='btn btn-dark'>
                        Transferir
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section("js")
    <script>
        @if(count($cuentas2) == 0)
        confirm('Usted no dispone de suficientes cuentas propias, por lo tanto no puede realizar transferencias');
        window.location.href = "{{ route('inicio') }}"
        @endif
    </script>
@endsection
