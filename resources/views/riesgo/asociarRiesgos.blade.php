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
                            <br><b>Asociar riesgos a {!!$proyecto!!}</b>
                        </h1>
                    </div>
                </div>
                @include('errors.form')
                <div class="row">
                    {!! Form::open(array('route' => 'asociarRiesgos.store', 'method'=>'POST')) !!}
                        		<?php $var = 0; ?>
								@foreach ($riesgos->all() as $riesgo)
								<div class="form-group col-lg-12">
									<div class="col-lg-3">
										{!!Form::checkbox('riesgos[]',$riesgo)!!}
                						{!!Form::label($riesgo)!!}
                					</div>
                				</div>
                				<?php 
                				$var = $var + 1;
                				?>
            					@endforeach
                        </div>
                        
                        <div class="col-lg-12">
                        <div class="col-lg-3"></div>
                        <input type="hidden" id="idProyecto" name="idProyecto" value={{$id}}>
                        <div class="col-lg-2">{!!Form::submit('Asociar riesgos',['id'=>'crear','class'=>'btn btn-primary'])!!}</div>
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

@endsection