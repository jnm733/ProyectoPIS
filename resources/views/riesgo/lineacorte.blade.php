<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuUsuario')
    @section('content')


    @include('errors.form')
    <div id="page-wrapper-2">

        <div class="container-fluid" style="height: 100%">

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
                            @foreach($lista as $valor) 
                            <tr>
                                <td>{{$valor[0]}}</td>
                                <td>{{$valor[1]}}</td>
                                <td>{{$valor[3]}} %</td>
                                <td>{{$valor[2]}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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