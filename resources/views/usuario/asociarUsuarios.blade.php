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

        <div class="container-fluid text-center" style="height:auto; min-height: 100%">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">
                        <br><b>Asociar usuarios a {!!$proyecto!!}</b>
                    </h1>
                </div>
            </div>
            @include('errors.form')

            {!! Form::open(array('route' => 'asociarUsuarios.store', 'method'=>'POST')) !!}                        		
            @foreach ($usuarios->all() as $usuario)
            <div class="row">
            <div class="col-lg-4"></div>
                <div class="form-group col-lg-8">
                   <div class="col-lg-3">
                    @if($asociados->contains($usuario->id))
                    @if($usuario->id == $jefe)
                    {!!Form::checkbox('usuarios[]',$usuario->id,true,array('disabled'))!!}
                    @else 
                    {!!Form::checkbox('usuarios[]',$usuario->id,true)!!}
                    @endif
                    @else
                    {!!Form::checkbox('usuarios[]',$usuario->id,false)!!}
                    @endif

                    {!!Form::label($usuario->name)!!}
                </div>
            </div>
        </div>
        @endforeach


        <div class="col-lg-12">
            <div class="col-lg-3"></div>
            {!!Form::hidden('idProyecto',$id)!!}
            {!!Form::hidden('jefe',$jefe)!!}
            <div class="col-lg-2">{!!Form::submit('Asociar usuarios',['id'=>'crear','class'=>'btn btn-primary'])!!}</div>
            <div class="col-lg-1">
                <a href="/index" class="btn btn-primary">Cancelar
                </a>
            </div>
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