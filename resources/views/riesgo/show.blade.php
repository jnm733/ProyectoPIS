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
						<br><b>{{$riesgo->nombreRiesgo}}</b>
					</h1>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-lg-12">
                        <div class="col-lg-4">
                            <br><b>Codigo del riesgo:</b>
                        </div>
                        <div class="col-lg-4">
                            <br>{!!$riesgo->id!!}
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">
                            <br><b>Tipo de riesgo:</b>
                        </div>
                        <div class="col-lg-4">
                            <br>{!!$categoria->nombreCategoria!!}
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">
                            <br><b>Descripcion del riesgo:</b>
                        </div>
                        <div class="col-lg-4">
                            <br>{!!$riesgo->descripcion!!}
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">

                            <br><b>Factores del riesgo:</b>
                            
                        </div>
                        <div class="col-lg-4">

                            <br>{!!$riesgo->factoresRiesgo!!}
                            
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">

                            <br><b>Reduccion del riesgo:</b>
                            
                        </div>
                        <div class="col-lg-4">

                            <br>{!!$riesgo->reduccionRiesgo!!}
                            
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4">

                            <br><b>Supervision del riesgo:</b>
                            
                        </div>
                        <div class="col-lg-4">

                            <br>{!!$riesgo->supervisionRiesgo!!}
                            
                        </div>
                    </div>
			</div>
			@include('errors.form')


		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@endsection