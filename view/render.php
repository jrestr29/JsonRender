<html>
    <head>
        <title>Render desde base de datos</title>
        <script src="files/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="files/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="files/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="files/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="files/css/style.css" rel="stylesheet" type="text/css"/>
        <script>
            $(document).ready(function () {
                //Ahora que todo esta cargado vamos a consultar en el controlador los elementos a crear
                var ajax = $.ajax({
                    url: "index.php?load=controller&&func=loadAll",
                    dataType: "HTML",
                    type: "GET"
                });


                ajax.done(function (data) {

                });

                ajax.fail(function () {
                    console.log("No se pudo ejecutar, sucedio un error");
                });
            });
        </script>
    </head>

    <body>
        <section id="control_btns" class="button_container">
            <button id="btn_anterior" class="btn-default">Anterior</button>
            <button id="btn_siguiente" class="btn-success">Siguiente</button>
        </section>
        
        
        <section class="content_container">
            
        </section>
    </body>
</html>
