
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
                        <br><b>Proyectos creados hasta ahora</b>
                    </h1>
                </div>
            </div>

            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de fin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{$proyecto->id}}</td>
                        <td>{{$proyecto->nombreProyecto}}</td>
                        <td>{{$proyecto->fechaInicio}}</td>
                        <td>{{$proyecto->fechaFin}}</td>
                        <td><a href="/proyecto/{{$proyecto->id}}">ver detalles</a></td>
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

