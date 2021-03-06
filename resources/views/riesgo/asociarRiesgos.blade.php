<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuUsuario')
    @section('content')

    <div id="page-wrapper">

        <div class="container-fluid text-center " style="height:auto; min-height: 100%">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <br><b>Asociar riesgos a {!!$proyecto!!}</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')
            @include('errors.error')
            
            {!! Form::open(array('route' => 'asociarRiesgos.store','method'=>'POST')) !!}                        		
            @foreach ($riesgos->all() as $riesgo)
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="form-group col-lg-10">
                    <div class="form-group col-lg-4">
                    @if(!$nuevo)
                        @if($asociados->contains($riesgo->id)) 
                        {!!Form::checkbox('riesgos[]',$riesgo->id,true)!!}
                        @else
                        {!!Form::checkbox('riesgos[]',$riesgo->id,false)!!}
                        @endif
                    @else
                    
                        @foreach($aconsejados as $acon)
                        <?php 
                        $contain = false;
                        ?>
                            @if($acon == $riesgo->nombreRiesgo)
                            <?php $contain = true; ?>
                            @endif
                        @endforeach
                        @if($contain)
                        {!!Form::checkbox('riesgos[]',$riesgo->id,true)!!}
                        @else
                        {!!Form::checkbox('riesgos[]',$riesgo->id,false)!!}
                        @endif
                    @endif
                    {!!Form::label($riesgo->nombreRiesgo)!!}
                    </div>
                    <div class="form-group col-lg-1">
                        {!!Form::text('prob[]',null,['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group col-lg-1">
                        {!!Form::label('%')!!}
                    </div>

                    <div class="form-group col-lg-2">
                        {!!Form::select('impacto[]', array('catastrofico' => 'Catastrofico', 'critico' => 'Critico','marginal' => 'Marginal','despreciable' => 'Despreciable'),null,['class'=>'form-control', null,'required'])!!}
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="form-group col-lg-12">
                <div class="col-lg-2"></div>
                    <div class="col-lg-3">
                    <a href="/riesgo/create" class="btn btn-primary" target="blank">Crear riesgo
                        </a>
                    </div>

                    <div class="col-lg-3">
                        {!!Form::submit('Asociar',['name'=>'asociar','id'=>'asociar','class'=>'btn btn-primary'])!!}
                    </div>

                    <div class="col-lg-3">
                        <a href="/index" class="btn btn-primary">Cancelar
                        </a>
                    </div>
                </div>
            </div>
            {!!Form::hidden('idProyecto',$id)!!}
            <input type="hidden" id="tipo" name="tipo">
            
            <input type="hidden" id="idProyecto" name="idProyecto" value={{$id}}>
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