<div id="wrapper">

    <!-- Navigation -->
    @extends('layouts.menuInvitado')
    @section('content')

        <div id="page-wrapper">

            <div class="container-fluid" style="height: 100%">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">
                            <br><b>Creación de un nuevo usuario</b>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    {!! Form::open(array('route' => 'usuario.store', 'method'=>'POST')) !!}
                       
                        <div class="form-group col-lg-12">
                            {!!Form::text('nombreUsuario',null,['class'=>'form-control form-control-usr center-block', 'required', 'placeholder'=>'Nombre de usuario'])!!}
                        </div>
                        <div class="form-group col-lg-12">
                            {!!Form::text('email',null,['class'=>'form-control form-control-usr center-block', 'required', 'placeholder'=>'Correo de usuario'])!!}
                        </div>
                        <div class="form-group col-lg-12">
                            {!! Form::password('password', ['class'=>'form-control form-control-usr center-block', 'required', 'placeholder'=>'Contraseña']) !!}
                        </div>
                        <div class="col-lg-12">
                        {!!Form::submit('Registrar',['class'=>'btn center-block btn-primary'])!!}
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