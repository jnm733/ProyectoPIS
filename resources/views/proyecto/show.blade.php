<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuUsuario')
    @section('content')



    <script type="text/javascript">
        $(document).ready(function(){ 
            $('#crear').click(function(){ 
                var value = $("#lista :selected").text();
                document.getElementById("tipo").value= value;
            });
        });
    </script>
    <div id="page-wrapper">

        <div class="container-fluid" style="height: 100%">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">
                        <br><b>Proyecto {!!$proyecto->nombreProyecto!!} de {!!Auth::user()->name!!}</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                    <button data-toggle="collapse" data-target="#datos" class="btn btn-primary">Mostrar Datos</button>
                    </div>
                    <div id="datos" class="collapse">
                        Lorem ipsum dolor text.
                    </div>
                    <br><br>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Codigo de proyecto:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->id!!}
                        </h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Descripcion de proyecto:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->descripcion!!}
                        </h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Fecha de inicio:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->fechaInicio!!}
                        </h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Fecha de inicio:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->fechaInicio!!}
                        </h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <button data-toggle="collapse" data-target="#usuarios" class="btn btn-primary">Mostrar Usuarios</button>
                    </div>
                    <div id="usuarios" class="collapse">
                        Lorem ipsum dolor text.
                    </div>
                    <br><br>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <button data-toggle="collapse" data-target="#usuarios" class="btn btn-primary">Mostrar Riesgos</button>
                    </div>
                    

                    <div id="riesgos" class="collapse">
                        Lorem ipsum dolor text.
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@endsection