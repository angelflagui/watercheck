@extends('firebase.app')
@section('content')
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
                <div class="card mt-5 text-center text-bg-light border-primary">
                    <div class="card-header mt-2">
                        <h4>Monitoreo del Agua en Tiempo Real</h4>
                    </div>
                    <div class="card-body">
                        <table class="table mt-3 mb-5 table-bordered text-center border-info">
                            <thead>
                                <tr>
                                    <th>Total de Sólidos Disueltos (TDS)</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider-info">
                                <tr>
                                    <td>{{ $tds }} PPM (partes por millón)</td>
                                </tr>
                            </tbody>
                            <p>Se estará actualizando el dato obtenido del sensor TDS en la muestra de agua, en tiempo real.
                            </p>
                        </table>
                        {{-- <p>Última actualización: {{ date('d/m/Y H:i:s') }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

