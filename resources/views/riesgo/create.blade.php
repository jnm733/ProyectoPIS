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
    <div id="page-wrapper-2">

        <div class="container-fluid" style="height: 100%">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">
                        <br><b>Creación de un nuevo riesgo</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')

            <div class="row">
                {!! Form::open(array('route' => 'riesgo.store', 'method'=>'POST')) !!}

                <div class="form-group col-lg-12">
                    <div class="col-lg-3">{!!Form::label('Codigo de riesgo:')!!}</div>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-3">
                        {!!Form::label('Categoria del riesgo:')!!}
                    </div>
                    <div class="col-lg-2">
                        {!!Form::select('lista',$tipos,null,['id'=>'lista','class' => 'form-control'])!!}
                    </div>

                    {!!Form::button('+',['class'=>'btn btn-primary', 'data-toggle'=>'modal','data-target'=>'#miventana'])!!}
                    
                </div>

                <div class="form-group col-lg-12">
                    <div class="col-lg-3">{!!Form::label('Nombre del riesgo:')!!}</div>
                    <div class="col-lg-3">
                        {!!Form::text('nombreRiesgo',null,['class'=>'form-control', 'required', 'placeholder'=>'Nombre de riesgo'])!!}
                    </div>
                    <div class="col-lg-3">{!!Form::label('Tipo de riesgo:')!!}</div>
                    <div class="col-lg-3">
                        {!!Form::text('tipoRiesgo',null,['class'=>'form-control', 'required', 'placeholder'=>'Tipo de riesgo'])!!}
                    </div>
                </div>

                <div class="form-group col-lg-12">
                    <div class="col-lg-3">{!!Form::label('Descripcion del riesgo:')!!}</div>
                    <div class="col-lg-8">
                        {!!Form::textarea('descripcion',null,['size' => '30x5','class'=>'form-control', 'required', 'placeholder'=>'Descripcion de proyecto'])!!}
                    </div>
                </div>

                <div class="form-group col-lg-12">
                    <div class="col-lg-3">{!!Form::label('Factores que influyen:')!!}</div>
                    <div class="col-lg-8">
                        {!!Form::textarea('factores',null,['size' => '30x5','class'=>'form-control', 'required', 'placeholder'=>'Factores que influyen'])!!}
                    </div>
                </div>

                <div class="form-group col-lg-12">
                    <div class="col-lg-3">{!!Form::label('Reduccion del riesgo:')!!}</div>
                    <div class="col-lg-8">
                        {!!Form::textarea('reduccion',null,['size' => '30x5','class'=>'form-control', 'required', 'placeholder'=>'Reduccion de proyecto'])!!}
                    </div>
                </div>

                <div class="form-group col-lg-12">
                    <div class="col-lg-3">{!!Form::label('Supervision del riesgo:')!!}</div>
                    <div class="col-lg-8">
                        {!!Form::textarea('supervision',null,['size' => '30x5','class'=>'form-control', 'required', 'placeholder'=>'Supervision de proyecto'])!!}
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-3"></div>
                    <input type="hidden" id="tipo" name="tipo">
                    <div class="col-lg-2">{!!Form::submit('Crear riesgo',['id'=>'crear','class'=>'btn btn-primary'])!!}</div>
                    <div class="col-lg-1"><a href="/index" class="btn btn-primary">Cancelar
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

<!--Empieza el modal -->
<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labellebdy="myModallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4>
                    <br><b>Creación de una nueva categoria de Riesgo</b>
                </h4>
            </div>

            <div class="modal-body">
               @include('errors.form')

               <div class="row">
                {!! Form::open(array('route' => 'categoria.store', 'method'=>'POST')) !!}

                <div class="form-group col-lg-12">
                    <div class="col-lg-3">{!!Form::label('Nombre de Categoria:')!!}</div>
                    <div class="col-lg-8">
                        {!!Form::text('nombreCategoria',null,['class'=>'form-control', 'required', 'placeholder'=>'Nombre de Categoria'])!!}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-1">{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}</div>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.row -->
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar
            </button>
        </div>
    </div>
</div>

<!--Termina el modal -->

@endsection