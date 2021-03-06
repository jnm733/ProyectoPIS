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

        <div class="container-fluid" style="height: auto; min-height: 100%;">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">
                        <br><b>Creación de un nuevo Proyecto de {!!Auth::user()->name!!}</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')
            <div class="row">
                {!! Form::open(array('route' => 'proyecto.store', 'method'=>'POST')) !!}

                <div class="form-group col-lg-12">
                   <div class="col-lg-3">{!!Form::label('Codigo de proyecto:')!!}</div>
                   <div class="col-lg-4">
                       {!!$count!!}
                   </div>
               </div>
               <div class="form-group col-lg-12">
                   <div class="col-lg-3">{!!Form::label('Nombre del proyecto:')!!}</div>
                   <div class="col-lg-8">
                       {!!Form::text('nombreProyecto',null,['class'=>'form-control', 'placeholder'=>'Nombre de proyecto'])!!}
                   </div>
               </div>
               <div class="form-group col-lg-12">
                   <div class="col-lg-3">{!!Form::label('Tipo de proyecto:')!!}</div>
                   <div class="col-lg-4">
                       {!!Form::select('lista',$tipos,null,['id'=>'lista','class' => 'form-control'])!!}
                   </div>

                   {!!Form::button('+',['class'=>'btn btn-primary', 'data-toggle'=>'modal','data-target'=>'#miventana'])!!}

               </div>
               <div class="form-group col-lg-12">
                <div class="col-lg-3">{!!Form::label('Descripcion del proyecto:')!!}</div>
                <div class="col-lg-8">
                    {!!Form::textarea('descripcion',null,['size' => '30x5','class'=>'form-control', 'placeholder'=>'Descripcion de proyecto'])!!}
                </div>
            </div>
            <div class="form-group col-lg-12">
               <div class="col-lg-3">{!!Form::label('Fecha de inicio:')!!}</div>
               <div class="col-lg-4">
                        	<!-- {!!Form::selectRange('number', 10, 20)!!}
                        	{!!Form::selectMonth('month')!!} -->
                        	
                        	{!!Form::date('fechaInicio',\Carbon\Carbon::now(),['class' => 'form-control'])!!}
                        	
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                       <div class="col-lg-3">{!!Form::label('Fecha de Fin:')!!}</div>
                       <div class="col-lg-4">
                        	<!-- {!!Form::selectRange('number', 10, 20)!!}
                        	{!!Form::selectMonth('month')!!} -->
                        	
                        	{!!Form::date('fechaFin',\Carbon\Carbon::now(),['class' => 'form-control'])!!}
                        	
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-3"></div>
                        <input type="hidden" id="tipo" name="tipo">
                        
                        <div class="col-lg-2">{!!Form::submit('Siguiente',['id'=>'crear','class'=>'btn btn-primary'])!!}</div>
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
                        <br><b>Creación de un nuevo tipo de Proyecto</b>
                    </h4>
                </div>

                <div class="modal-body">
                 @include('errors.form')

                 <div class="row">
                    {!! Form::open(array('route' => 'tipoProyecto.store', 'method'=>'POST')) !!}
                    <div class="form-group col-lg-12">
                        <div class="col-lg-3">{!!Form::label('Tipo de Proyecto:')!!}</div>
                        <div class="col-lg-8">
                            {!!Form::text('tipo',null,['class'=>'form-control','placeholder'=>'Tipo de proyecto'])!!}
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-1">{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}</div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>

<!--Termina el modal -->

@endsection