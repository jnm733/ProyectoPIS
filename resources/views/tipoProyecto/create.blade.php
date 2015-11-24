<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuUsuario')
    @section('content')

        <div id="page-wrapper">

            <div class="container-fluid" style="height: 100%">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">
                            <br><b>Creación de un nuevo tipo de Proyecto</b>
                        </h1>
                    </div>
                </div>
                @include('errors.form')

                <div class="row">
                    {!! Form::open(array('route' => 'tipoProyecto.store', 'method'=>'POST')) !!}
                        <div class="form-group col-lg-12">
                        	<div class="col-lg-3">{!!Form::label('Tipo de Proyecto:')!!}</div>
                        	<div class="col-lg-8">
                        	{!!Form::text('tipo',null,['class'=>'form-control', 'required', 'placeholder'=>'Tipo de proyecto'])!!}
                        	</div>
                        </div>
                        <div class="col-lg-12">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-1">{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}</div>
                        <div class="col-lg-1"><a href="/proyecto/create" class="btn btn-primary">Cancelar
                                </a></div>
                        </div>
                        {!! Form::close() !!}
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@endsection