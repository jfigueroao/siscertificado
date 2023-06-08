@extends('adminlte::page')

@section('title', 'Dashboard')

<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->

{{-- <!-- <link rel="stylesheet" href="http://localhost/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="http://localhost/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css?v=3.2.0"> --> --}}

<!-- <style>
    table.dataTable thead tr {
        background-color: #73AEF9;
}
</style> -->

@section('content_header')

@stop

@section('content')
<br>
<x-adminlte-card title="LOCAL" class="m-2" theme="dark" icon="fas fa-id-card">
    <div class="col-12">                                         
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                                    <thead class="text-center text-nowrap bg-info ">
                                        <tr>
                                            <th>LICENCIA</th>
                                            <th>PERIODO</th>
                                            <th>VIGENCIA</th>
                                            <th>NATURAL / JURIDICA</th>
                                            <th>ASUNTO</th>
                                            <th>EXPEDIENTE</th>
                                            <th>FECHA EXPEDIENTE</th>
                                            <th>RESOLUCIÓN</th>
                                            <th>APELLIDOS Y NOMBRES / RAZON SOCIAL</th>
                                            <th>R.U.C.</th>
                                            <th>TELEFONO</th>
                                            <th>DNI</th>
                                            <th>REPRESENTANTE LEGAL</th>
                                            <th>DNI REPRESENTANTE</th>
                                            <th>DIRECCIÓN DEL ESTABLECIMIENTO</th>
                                            <th>Nº</th>
                                            <th>INT</th>
                                            <th>MZ</th>
                                            <th>LT.</th>
                                            <th>C. SECT.</th>
                                            <th>SECTOR</th>
                                            <th>ZONA</th>
                                            <th>GIRO DEL ESTABLECIMIENTO</th>
                                            <th>ESTABLECIMIENTO</th>
                                            <th>NIVEL DE RIESGO</th>
                                            <th>AREA</th>
                                            <th>OBSERVACIONES</th>
                                            <th>ZONIFICACION</th>
                                            <th>NOMBRE COMERCIAL</th>
                                            <th>RECIBO DE PAGO</th>
                                            <th>FECHA DE PAGO</th>
                                            <th>IMPORTE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td>001</td>
                                            <td>2023</td>
                                            <td>INDETERMINADA</td>
                                            <td>NATURAL</td>
                                            <td>LICENCIA DE FUNCIONAMIENTO INDETERMINADA</td>
                                            <td>01410-2023</td>
                                            <td>20/02/2023</td>
                                            <td>0219-2023-MDP/GLDET</td>
                                            <td>ZEVALLOS DIAZ EDWIN ANTONIO</td>
                                            <td>10444274293</td>
                                            <td>979323061</td>
                                            <td>44427429</td>
                                            <td></td>
                                            <td></td>
                                            <td>AV. COLONIAL - PUESTO 30</td>
                                            <td>201</td>
                                            <td></td>
                                            <td>D</td>
                                            <td>8</td>
                                            <td>001</td>
                                            <td>CERCADO</td>
                                            <td>1</td>
                                            <td>BODEGA - BAZAR</td>
                                            <td>BAZAR - LIBRE</td>
                                            <td>N.R. Medio</td>
                                            <td>34.50</td>
                                            <td></td>
                                            <td>RDM - RESIDENCIAL DE DENSIDAD MEDIA</td>
                                            <td>CENTRO RECREACIONAL LAS PALMAS</td>
                                            <td>37447</td>
                                            <td>30/11/2022</td>
                                            <td>200.90</td>
                                        </tr>
                                        <tr >
                                            <td>002</td>
                                            <td>2023</td>
                                            <td>UN (01) AÑO</td>
                                            <td>JURIDICA</td>
                                            <td>LICENCIA DE FUNCIONAMIENTO TEMPORAL</td>
                                            <td>13497-2023</td>
                                            <td>11/11/2023</td>
                                            <td>0305-2023-MDP/GLDET</td>
                                            <td>WORLD CUISINE S.R.LTDA.</td>
                                            <td>20254043355</td>
                                            <td>994006376</td>
                                            <td></td>
                                            <td>VELARDE DE LA PIEDRA OSCAR</td>
                                            <td>06671343</td>
                                            <td>CALLE 7</td>
                                            <td></td>
                                            <td></td>
                                            <td>K</td>
                                            <td>92</td>
                                            <td>309</td>
                                            <td>CASA BLANCA</td>
                                            <td>3</td>
                                            <td>RESTAURANTE CAMPESTRE</td>
                                            <td></td>
                                            <td>N.R. Muy Alto</td>
                                            <td>4,022.84</td>
                                            <td></td>
                                            <td>CV - COMERCIO VECINAL</td>
                                            <td>TORTAS MARCELA</td>
                                            <td>4786</td>
                                            <td>24/01/2023</td>
                                            <td>679.00</td>
                                        </tr>
                                        @foreach ($registro as $registros)
                                        <tr>
                                            <td>{{ $registros->id }}</td>
                                            <td>{{ $registros->periodo }}</td>
                                            <td>{{ $registros->vigencia }}</td>
                                            <td>{{ $registros->natJurid }}</td>
                                            <td>{{ $registros->asunto }}</td>
                                            <td>{{ $registros->expediente }}</td>
                                            <td>{{ $registros->fechaExped }}</td>
                                            <td>{{ $registros->resolucion }}</td>
                                            <td>{{ $registros->apeNombre }}</td>
                                            <td>{{ $registros->ruc }}</td>
                                            <td>{{ $registros->telefono }}</td>
                                            <td>{{ $registros->dni }}</td>
                                            <td>{{ $registros->repLegal }}</td>
                                            <td>{{ $registros->dniRepLegal }}</td>
                                            <td>{{ $registros->dirEstable }}</td>
                                            <td>{{ $registros->numero }}</td>
                                            <td>{{ $registros->int }}</td>
                                            <td>{{ $registros->manzana }}</td>
                                            <td>{{ $registros->lote }}</td>
                                            <td>{{ $registros->cSect }}</td>
                                            <td>{{ $registros->sector }}</td>
                                            <td>{{ $registros->zona }}</td>
                                            <td>{{ $registros->giroEstable }}</td>
                                            <td>{{ $registros->estable }}</td>
                                            <td>{{ $registros->nivelRiesgo }}</td>
                                            <td>{{ $registros->area }}</td>
                                            <td>{{ $registros->observacion }}</td>
                                            <td>{{ $registros->zonificacion }}</td>
                                            <td>{{ $registros->nomComercial }}</td>
                                            <td>{{ $registros->reciboPago }}</td>
                                            <td>{{ $registros->fechaPago }}</td>
                                            <td>{{ $registros->importe }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-adminlte-card>

@stop

@section('css')
    <link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.css">
@stop

@section('js')
@stop