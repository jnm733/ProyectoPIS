
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
                        <br><b>Usuarios registrados</b>
                    </h1>
                </div>
            </div>

            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        
                        <td><a href="/usuario/{{$usuario->id}}">ver detalles</a></td>
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

