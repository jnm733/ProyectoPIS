<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplicacion para la gestion de riesgos</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Menú Horizontal -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-center" href='/'>Aplicación de Gestión de Riesgos</a>
        </div>
        <ul class="nav navbar-right top-nav">
            <li class="active">
                <a href="#" data-toggle = "modal" data-target="#miventana"><i class="fa fa-fw fa-user-plus"></i> Registrarse</a>
            </li>
        </ul>
        <!-- Top Menu Items -->

        <!-- Menú Vertical -->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                {!! Form::open(array('route' => 'login.store', 'method'=>'POST')) !!}
                <h3 class="text-center">Iniciar Sesión</h3>
                <div class="form-group">
                    {!!Form::text('nombreUsuario',null,['class'=>'form-control', 'placeholder'=>'Nombre de usuario'])!!}
                </div>

                <div class="form-group">
                    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña']) !!}}

                    {!!Form::checkbox('remember','recordar',false)!!}
                    {!!Form::label('recordarmelbl','Recordar')!!}
                </div>

                {!!Form::submit('Iniciar Sesión',['class'=>'btn center-block btn-primary'])!!}
                {!! Form::close() !!}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <!--Empieza el modal -->
    <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labellebdy="myModallabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4>
                        <br><b>Creación de una nueva categoria de Riesgo</b>
                    </h4>
                </div>

                <div class="modal-body">
                   @include('errors.form')

                   <div class="row">
                    {!! Form::open(array('route' => 'usuario.store', 'method'=>'POST')) !!}
                    
                    <div class="form-group col-lg-12">             
                        {!!Form::text('nombreUsuario',null,['class'=>'form-control form-control-usr center-block', 'required', 'placeholder'=>'Nombre de usuario'])!!}
                    </div>
                    <div class="form-group col-lg-12">
                        {!!Form::email('email',null,['class'=>'form-control form-control-usr center-block', 'required', 'placeholder'=>'Correo de usuario'])!!}
                    </div>
                    <div class="form-group col-lg-12">
                        {!! Form::password('password', ['class'=>'form-control form-control-usr center-block', 'required', 'placeholder'=>'Contraseña']) !!}
                    </div>
                    <div class="form-group col-lg-12">
                        {!!Form::password('password_confirmation',['class'=>'form-control form-control-usr center-block', 'required', 'placeholder'=>'Repita la contraseña'])!!}
                    </div>
                    <div class="col-lg-12">
                        {!!Form::submit('Registrar',['class'=>'btn center-block btn-primary'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.row -->
            </div>

            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--Termina el modal -->

@yield('content')

<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/js/plugins/morris/raphael.min.js"></script>
<script src="/js/plugins/morris/morris.min.js"></script>
<script src="/js/plugins/morris/morris-data.js"></script>

<script src="https://code.jquery.com/jquery.js"></script>

</body>

</html>
