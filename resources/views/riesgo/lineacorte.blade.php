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
        <div id="page-wrapper-2">

            <div class="container-fluid" style="height: 100%">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">
                            <br><b>Linea de corte de </b>
                            {!!$id!!}
                        </h1>
                    </div>
                </div>
                @include('errors.form')

                <div class="row">
                   
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@endsection