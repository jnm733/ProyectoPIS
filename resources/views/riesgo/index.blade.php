
<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuUsuario')
    @section('content')

    <div id="page-wrapper">

        <div class="container-fluid" style="min-height: 100%;">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">
                        <br><b>Riesgo creados hasta ahora</b>
                    </h1>
                </div>
            </div>

            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riesgos as $riesgo)
                    <tr>
                        <td>{{$riesgo->id}}</td>
                        <td>{{$riesgo->nombreRiesgo}}</td>
                        <td>{{$categoriaArr[$riesgo->categoria_riesgo_id-1]}}</td>
                        
                        <td><a href="/riesgo/{{$riesgo->id}}">ver detalles</a></td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@endsection

