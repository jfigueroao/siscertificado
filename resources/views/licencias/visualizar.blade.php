@extends('adminlte::page')

@section('title', 'Dashboard')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="http://localhost/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="http://localhost/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="875bc305-b8c2-46fd-a62d-9e847d4e5791">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>

@section('content_header')

@stop

@section('content')

    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                        <thead>
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
                                <td>0002</td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="http://localhost/plugins/jquery/jquery.min.js"></script>

    <script src="http://localhost/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="http://localhost/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="http://localhost/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="http://localhost/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="http://localhost/plugins/jszip/jszip.min.js"></script>
    <script src="http://localhost/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="http://localhost/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="http://localhost/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="http://localhost/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="http://localhost/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/js/demo.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
    </script>
@stop