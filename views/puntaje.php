<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url() ?>static/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>static/fontawesome/css/all.min.css">
    <script src="<?= base_url() ?>static/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>static/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>static/css/stilo.css">

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
    <title>CACECA</title>
</head>
<style>
    body {
        background-color: white;
    }
</style>

<body class="">
    <center>
        <img style="width: 450px;" src="<?php echo base_url('static/images/logo.png'); ?>" />
    </center>
    <br />
    <br />
    <center>
        <h3>RESUMEN DE PUNTAJE ASIGNADO</h3>

        <table style="width: 1000px; background-color: white;" class="table table-border">
            <thead class="thead">
                <th>CATEGORÍA
                </th>
                <th>PUNTAJE</th>

                <th width="8%">AUTOEVALUACIÓN</th>

            </thead>
            <tr>
                <th style="border: 1px solid black;">1. PERSONAL</th>

                <th style="border: 1px solid black;">
                    <center>180</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">2. ESTUDIANTES</th>

                <th style="border: 1px solid black;">
                    <center>119</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias2');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">3. PLAN DE ESTUDIOS</th>

                <th style="border: 1px solid black;">
                    <center>133</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias3');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">4. EVALUACIÓN DEL APRENDIZAJE</th>

                <th style="border: 1px solid black;">
                    <center>55</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias4');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">5. FORMACIÓN INTEGRAL</th>

                <th style="border: 1px solid black;">
                    <center>90</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias5');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">6. SERVICIOS DE APOYO PARA EL APRENDIZAJE</th>

                <th style="border: 1px solid black;">
                    <center>68</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias6');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">7. VINCULACIÓN - EXTENSIÓN</th>

                <th style="border: 1px solid black;">
                    <center>118</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">8. INVESTIGACIÓN</th>

                <th style="border: 1px solid black;">
                    <center>75</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias8');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">9. INFRAESTRUCTURA Y EQUIPAMIENTO</th>

                <th style="border: 1px solid black;">
                    <center>41</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias9');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>

            <tr>
                <th style="border: 1px solid black;">10. GESTIÓN ADMINISTRATIVA Y FINANCIAMIENTO</th>

                <th style="border: 1px solid black;">
                    <center>121</center>
                </th>

                <th style="border: 1px solid black;">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias10');
                        foreach ($consulta->result() as $row) {
                            echo $row->total;
                        } ?>
                    </center>
                </th>
            </tr>
            <thead class="thead">
                <th>TOTAL
                </th>
                <th>
                    <center>
                        1000
                    </center>
                </th>

                <th width="8%">
                    <center>
                        <?php
                        $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias');
                        $consulta2 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias2');
                        $consulta3 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias3');
                        $consulta4 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias4');
                        $consulta5 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias5');
                        $consulta6 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias6');
                        $consulta7 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7');
                        $consulta8 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias8');
                        $consulta9 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias9');
                        $consulta10 = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias10');
                        foreach ($consulta->result() as $row) {
                            foreach ($consulta2->result() as $row2) {
                                foreach ($consulta3->result() as $row3) {
                                    foreach ($consulta4->result() as $row4) {
                                        foreach ($consulta5->result() as $row5) {
                                            foreach ($consulta6->result() as $row6) {
                                                foreach ($consulta7->result() as $row7) {
                                                    foreach ($consulta8->result() as $row8) {
                                                        foreach ($consulta9->result() as $row9) {
                                                            foreach ($consulta10->result() as $row10) {
                                                                echo $row->total + $row2->total +  $row3->total +  $row4->total +  $row5->total +  $row6->total +  $row7->total +  $row8->total +  $row9->total +  $row10->total;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        } ?>
                    </center>
                </th>

            </thead>
        </table>

        <a style="align-content:flex-start;" type="button" class="btn btn-warning" href="<?= base_url() ?>cacecad/principal">
            <h5>Regresar</h5>

        </a>
    </center>

</body>

</html>