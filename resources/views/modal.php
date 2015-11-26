<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <meta http-equiv="viewport" content="width-device-width, initial-scale=1">
    <title>Ventanas emergentes</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top:60px;">
        <button class="btn btn-info" data-toggle="modal" data-target="#miventana">
            Abrir ventana
        </button>

        <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labellebdy="myModallabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X;</button>
                        <h4>Hola esta es mi primera ventana modal</h4>
                    </div>

                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eveniet similique temporibus omnis accusamus sapiente obcaecati repellat tempore eligendi laudantium consequatur, sunt magni eaque dolorum libero! Harum fugiat, impedit earum!
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>