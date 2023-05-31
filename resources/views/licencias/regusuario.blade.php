@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<x-adminlte-card title="REGISTRO PERSONAL" class="m-5" theme="dark" icon="fas fa-id-card">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title pb-2">DNI a consultar : <span class="text-danger">*</span></h3>
                        </div> --}}                        
                        <form action="" id="formulario" method="POST" autocomplete="off">
                            @csrf
                            <div class="card-body">                                
                                <div class="row ">                                   
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="number" name="dni" id="dni" placeholder="Ingrese DNI" label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="text" name="nombre" id="nombre" placeholder="Ingrese nombres" label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="text" name="apellido" id="apellido" placeholder="Ingrese apellidos" label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="text" name="area" id="area" placeholder="Área Destinada" label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="text" name="rSocial" id="rSocial" placeholder="Razón Social" label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="text" name="direccion" id="direccion" placeholder="Dirección" label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="number" name="document" placeholder="Teléfono" label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="number" name="document" placeholder="Ingrese DNI a consultar.." label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="number" name="document" placeholder="Ingrese DNI a consultar.." label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- With prepend slot --}}                                    
                                                <x-adminlte-input type="number" name="document" placeholder="Ingrese DNI a consultar.." label-class="text-lightblue">
                                                    <x-slot name="prependSlot">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-id-card text-dark"></i>
                                                        </div>
                                                    </x-slot>
                                                </x-adminlte-input>  
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary" name="btnBuscar" id="btnBuscar" type="submit">
                                                    <i class="fas fa-upload"></i>
                                                    Registrar
                                                </button>                                                                       
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>
                                {{-- @push('js')<script>$(() => $("#drPlaceholder").val(''))</script>@endpush --}}
                                   
                                
                            </div>   
                        </form>
                        <!-- /.form -->
                    </div>
                <!-- /.card -->            
                </div>
                <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section> 
</x-adminlte-card>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="../../dist/js/demo.js"></script>
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