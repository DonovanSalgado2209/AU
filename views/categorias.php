<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="<?= base_url() ?>static/js/jquery-3.4.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>static/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>static/fontawesome/css/all.min.css">
    <script src="<?= base_url() ?>static/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/dropzone.css">
    <script type="text/javascript" src="<?= base_url() ?>static/js/dropzone.js"></script>
    <SCRIPT src="<?= base_url() ?>static/js/j.js"></SCRIPT>

    <style>
        body {
            background-color: white;
        }

        .square {
            height: 850px;
            width: 1200px;

        }

        .thead {
            background-color: #72EE7B;
        }

        table {
            border: 1px solid black;
        }
    </style>
    <script>
        var base_url = "<?= base_url() ?>";
    </script>
</head>

<body class="">

    <center>
        <img style="width: 450px;" src="<?php echo base_url('static/images/logo.png'); ?>" />
    </center>

    <center>
        <a style="align-content:flex-start;" type="button" class="btn btn-warning" href="<?= base_url() ?>cacecad/principal">
            <h5>Regresar</h5>
        </a>
        <br />
        <br />

        <a type="button" class="btn btn-success" href="<?= base_url() ?>cacecad/puntaje">
            <h5>Resumen Puntaje Asignado</h5>
        </a>
    </center>
    <br />


    <div>
        <center>

            <table style="width: 1350px; background-color: white;" class="table table-border">
                <thead class="thead">
                    <tr>


                    </tr>

                </thead>

                <th colspan="3" style="border: 1px solid black;">
                    <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria1">Categoría 1: Personal Académico</a>


                </th>
                <tr>

                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria2">Categoría 2: Estudiantes</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria3">Categoría 3: Plan de Estudios</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria4">Categoría 4: Evaluación de Aprendizaje</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria5">Categoría 5: Formación Integral</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria6">Categoría 6: Servicios de Apoyo para el Aprendizaje</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria7">Categoría 7: Vinculación - Extensión</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria8">Categoría 8: Investigación</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria9">Categoría 9: Infraestructura y Equipamiento</a>
                    </th>
                </tr>

                <tr>
                    <th colspan="3" style="border: 1px solid black;">
                        <a type="button" class="btn btn-default btn-block" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria10">Categoría 10: Gestión Administrativa y Financiamiento</a>
                    </th>
                </tr>


            </table>
    </div>
    </center>

</body>

</html>