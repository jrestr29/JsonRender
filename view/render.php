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
                var array_elementos = new Array();
                var counter = 0;


                $("button[id='btn_anterior']").click(function (event) {
                    event.preventDefault();
                    counter--;
                    ajax_call(counter);
                    validateBackButton(counter);
                });

                $("button[id='btn_siguiente']").click(function (event) {
                    event.preventDefault();
                    counter++;
                    ajax_call(counter);
                    validateBackButton(counter);
                });

                function ajax_call(counter) {
                    var ajax = $.ajax({
                        url: "<?php echo URL_EJECUCION; ?>index.php?load=controller&&func=load",
                        dataType: "JSON",
                        type: "POST",
                        data: {counter: counter}
                    });

                    ajax.done(function (data) {
                        console.log(data);
                        $("section[id='container']").empty();
                        $("section[id='container']").html(data);
                    });

                    ajax.fail(function () {
                        console.log("No se pudo ejecutar, sucedio un error");
                    });
                }

                function validateBackButton(counter) {
                    if (counter > 0)
                        $("button[id='btn_anterior']").attr('disabled', false);
                    else
                        $("button[id='btn_anterior']").attr('disabled', true);
                }
            });
        </script>
    </head>

    <body>
        <section id="control_btns" class="button_container">
            <button id="btn_anterior" class="btn-default" disabled>Anterior</button>
            <button id="btn_siguiente" class="btn-success">Siguiente</button>
        </section>


        <section id="container" class="content_container">

        </section>
    </body>
</html>
