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
                        <br><b>Proyecto {!!$proyecto->nombreProyecto!!} de {!!Auth::user()->name!!}</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Codigo de proyecto:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->id!!}
                        </h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Descripcion de proyecto:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->descripcion!!}
                        </h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Fecha de inicio:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->fechaInicio!!}
                        </h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h3>
                            <br><b>Fecha de inicio:</b>
                        </h3>
                    </div>
                    <div class="col-lg-4">
                        <h3>
                            <br>{!!$proyecto->fechaInicio!!}
                        </h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="pagination">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
              </ul>
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