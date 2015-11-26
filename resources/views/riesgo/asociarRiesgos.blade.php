<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuUsuario')
    @section('content')

    <div id="page-wrapper">

        <div class="container-fluid text-center" style="height: 100%">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <br><b>Asociar riesgos a {!!$proyecto!!}</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')
            <div class="row">
                {!! Form::open(array('route' => 'asociarRiesgos.store','method'=>'POST')) !!}                        		
                @foreach ($riesgos->all() as $riesgo)
                <div class="col-lg-2"></div>
                <div class="form-group col-lg-8">
                   <div class="col-lg-3">
                    @if($asociados->contains($riesgo->id))
                    {!!Form::checkbox('riesgos[]',$riesgo->id,true)!!}
                    @else
                    {!!Form::checkbox('riesgos[]',$riesgo->id,false)!!}
                    @endif
                    {!!Form::label($riesgo->nombreRiesgo)!!}
                </div>
                <div class="col-lg-1">
                    {!!Form::text('prob[]',null,['class'=>'form-control'])!!}
                </div>
                <div class="col-lg-1">
                    {!!Form::label('%')!!}
                </div>
                <div class="col-lg-2">
                    {!!Form::select('impacto[]', array('catastrofico' => 'Catastrofico', 'critico' => 'Critico','marginal' => 'Marginal','despreciable' => 'Despreciable'),null,['class'=>'form-control', null,'required'])!!}
                </div>            </div>
                @endforeach
                <div class="form-group col-lg-12">
                    <div class="col-lg-3">
                    {!!Form::submit('Crear riesgo',['name'=>'crear','class'=>'btn btn-primary'])!!}                  
                        

                    </div>
                </div>
                <div class="col-lg-12">
                   <div class="col-lg-3">{!!Form::submit('Asociar riesgos',['id'=>'asociar','class'=>'btn btn-primary'])!!}</div>
                   <div class="col-lg-1">
                    <a href="/index" class="btn btn-primary">Cancelar
                    </a>
                </div>
            </div>
            {!!Form::hidden('idProyecto',$id)!!}
            <input type="hidden" id="tipo" name="tipo">
            <input type="hidden" id="idProyecto" name="idProyecto" value={{$id}}>
        </div>

        {!! Form::close() !!}

                        <!--Empieza el modal -->

                        {!!Form::button('Abrir ventana 2',['class'=>'btn btn-primary', 'data-toggle'=>'modal','data-target'=>'#miventana'])!!}

                        <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labellebdy="myModallabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                        <h4>Hola esta es mi primera ventana modal</h4>
                                    </div>

                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eveniet similique temporibus omnis accusamus sapiente obcaecati repellat tempore eligendi laudantium consequatur, sunt magni eaque dolorum libero! Harum fugiat, impedit earum!
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Termina el modal -->
    </div>
    <!-- /.row -->


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@endsection