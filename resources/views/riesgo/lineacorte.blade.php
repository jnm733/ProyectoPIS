<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuUsuario')
    @section('content')


    
    
    <div id="page-wrapper-2">

        <div class="container-fluid" style="height: 100%">

            @include('errors.form')
            @include('errors.error')
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">
                        <br><b>Linea de corte de {!!$nombreProyecto!!}</b>
                    </h1>
                </div>
            </div>

            <div class="container">                                       
                <div class="col-lg-12">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Riesgo</th>
                                <th>Probabilidad</th>
                                <th>Impacto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $var = 1;
                            ?>
                            @foreach($lista as $valor)
                            <tr>
                                <td>{{$var}}</td>
                                <td>{{$valor[1]}}</td>
                                <td>{{$valor[3]}} %</td>
                                <td>{{$valor[2]}}</td>
                                @if($linea==$var)
                            </tr>
                            <tr>
                                <td colspan="4" align="center">Linea de corte</td>
                            </tr>
                            @endif
                            <?php 
                            $var = $var + 1;
                            ?>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--Empieza el modal -->
        <div class="container" style="margin-top:60px;">

            {!!Form::button('Reestablecer',['class'=>'btn btn-primary', 'data-toggle'=>'modal','data-target'=>'#miventana'])!!}


            <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labellebdy="myModallabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 align="center">
                                <br><b>Reestablecer linea de corte</b>
                            </h4>
                        </div>

                        <div class="modal-body">

                         <div class="row">
                            {!! Form::open(array('route' => 'lineacorte.store', 'method'=>'POST')) !!}
                            {!!Form::hidden('nombreProyecto',$nombreProyecto)!!}
                            <?php $count = count($lista)?>
                            {!!Form::hidden('count',$count)!!}
                            <input type="hidden" name="lista" value='<?php echo serialize($lista) ?>'></input>

                            <div class="form-group col-lg-12">
                            <div class="col-lg-5">{!!Form::label('Establecer corte en:')!!}</div>
                            <div class="col-lg-2">
                                {!!Form::text('linea',null,['class'=>'form-control','required'])!!}
                            </div>
                            </div>
                            <div class="form-group col-lg-12">
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
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

@endsection