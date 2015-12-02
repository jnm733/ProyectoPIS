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
                        <br><b>Proyecto {!!$proyecto->nombreProyecto!!} de {!!Auth::user()->name!!}</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')

            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseA">
                        Datos del proyecto</a>
                    </h4>
                </div>
                <div id="collapseA" class="panel-collapse collapse in">
                  <div class="panel-body">
                      <div class="col-lg-12">
                        <div class="col-lg-4">
                            <br><b>Codigo de proyecto:</b>
                        </div>
                        <div class="col-lg-4">
                            <br>{!!$proyecto->id!!}
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">
                            <br><b>Descripcion de proyecto:</b>
                        </div>
                        <div class="col-lg-4">
                            <br>{!!$proyecto->descripcion!!}
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">

                            <br><b>Fecha de inicio:</b>
                            
                        </div>
                        <div class="col-lg-4">

                            <br>{!!$proyecto->fechaInicio!!}
                            
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">

                            <br><b>Fecha de fin:</b>
                            
                        </div>
                        <div class="col-lg-4">

                            <br>{!!$proyecto->fechaFin!!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseB">
                    Usuarios asociados al proyecto</a>
                </h4>
            </div>
            <div id="collapseB" class="panel-collapse collapse">
              <div class="panel-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="/usuario/{{$user->id}}">Ver detalles</a></td>
                    </tr>

                    @endforeach


                </tbody>
            </table>
            <a href="/asociarUsuarios/{{$proyecto->id}}" class = "btn btn-primary">Asociar nuevos usuarios</a>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseC">
            Riesgos asociados al proyecto</a>
        </h4>
    </div>
    <div id="collapseC" class="panel-collapse collapse">
        <div class="panel-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Prob</th>
                <th>Impacto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riesgos as $riesgo)
            <?php 
            $posCategoria = $riesgo->categoria_riesgo_id-1;
            ?>
            <tr>
                <td>{{$riesgo->id}}</td>
                <td>{{$riesgo->nombreRiesgo}}</td>
                <td>{{$categoriaArr[$posCategoria]}}</td>
                <td>{{$riesgo->pivot->probRiesgo}}</td>
                <td>{{$riesgo->pivot->impactoRiesgo}}</td>
                <td><a href="/riesgo/{{$riesgo->id}}">Ver detalles</a></td>
            </tr>
            
            @endforeach


        </tbody>
    </table>
    <a href="/asociarRiesgos/{{$proyecto->id}}" class = "btn btn-primary">Asociar nuevos riesgos</a>
    
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <br>
        <a href="/lineacorte/{{$proyecto->id}}/5" class = "btn btn-primary">Ver linea de corte</a>
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