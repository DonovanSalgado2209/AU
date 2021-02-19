<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>static/fontawesome/css/all.min.css">
    <script src="<?= base_url() ?>static/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>static/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <SCRIPT src="<?= base_url() ?>static/js/inicio.js"></SCRIPT>

    <style>
        body {
            background-color: white;
        }
    </style>
    <style>
        .square {
            height: 400px;
            width: 1200px;
            background-color: white;
        }

        .thead {
            background-color: #72EE7B;
        }
    </style>
    <script>
        var base_url = "<?= base_url() ?>";
    </script>
</head>

<body class="">
    <center>
        <img style="width: 450px;" src="<?php echo base_url('static/images/logo.png'); ?>" />
        <?php switch ($rol) {
            case 1:
                echo '<h4>Coordinador del Proceso de Evaluación CACECA (Interno, Docente)</h4>';
                break;
            case 2:
                echo '<h4>Colaborador del Proceso de Evaluación CACECA (Interno, Docente)</h4>';
                break;
            case 3:
                echo '<h4>Coordinador de Evaluadores CACECA (Externo)</h4>';
                break;
            case 4:
                echo '<h4>Evaluador del Proceso de Evaluación CACECA (Externo)</h4>';
                break;
        }

        ?>
        <div class="modal fade" id="modal-mensaje">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <DIV id="mensaje"></DIV>
                    </div>
                </div>
            </div>
        </div>
        <div class="square">

            <table class="table table-hover">
                <thead class="thead">
                    <tr>
                        <th width=5%>PERSONAL EVALUADOR</th>


                        <th width=5%></th>
                        <th width=5%></th>
                        <th width=5%></th>
                        <th width=14%> SOLICITUDES</th>
                        <th width=5%></th>
                        <th width=5%></th>
                        <th width=5%>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">
                                    <?= $nombre ?>
                                    <?= $appaterno ?>
                                    <?= $apmaterno ?>
                                </button>
                                <button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">

                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url() ?>cacecad/cierrasesion">Cerrar Sesión</a>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width=5%>Folio</td>
                        <td width=15%>Fecha</td>
                        <td width=10%>IES</td>
                        <td width=15%>Programa Educativo</td>
                        <td width=15%>Nivel Educacional</td>
                        <td width=15%>Modalidad</td>
                        <td width=15%>Estatus</td>
                        <td width=20%>Detalle</td>

                    </tr>
                    <tr>
                        <td style="border: 1px solid gray;">
                            <center>
                                <?php
                                $consulta = $this->db->query('SELECT Folio FROM solicitudes LIMIT 1');
                                foreach ($consulta->result() as $row) {
                                    echo $row->Folio;
                                } ?>
                            </center>
                        </td>

                        <td style="border: 1px solid gray;">
                            <center>
                                <?php
                                $consulta = $this->db->query('SELECT * FROM solicitudes');
                                foreach ($consulta->result() as $row) {
                                    echo $row->Fecha;
                                } ?>
                        </td>
                        <td style="border: 1px solid gray;">
                            <center>
                                <?php
                                $consulta = $this->db->query('SELECT * FROM solicitudes');
                                foreach ($consulta->result() as $row) {
                                    echo $row->IES;
                                } ?>
                        </td>
                        <td style="border: 1px solid gray;">
                            <center>
                                <?php
                                $consulta = $this->db->query('SELECT * FROM solicitudes');
                                foreach ($consulta->result() as $row) {
                                    echo $row->Programa_Educativo;
                                } ?>
                        </td>
                        <td style="border: 1px solid gray;">
                            <center>
                                <?php
                                $consulta = $this->db->query('SELECT * FROM solicitudes');
                                foreach ($consulta->result() as $row) {
                                    echo $row->Nivel_Educacional;
                                } ?>
                        </td>
                        <td style="border: 1px solid gray;">
                            <center>
                                <?php
                                $consulta = $this->db->query('SELECT * FROM solicitudes');
                                foreach ($consulta->result() as $row) {
                                    echo $row->Modalidad;
                                } ?>
                        </td>
                        <td style="border: 1px solid gray;">
                            <center>
                                <?php
                                $consulta = $this->db->query('SELECT * FROM solicitudes');
                                foreach ($consulta->result() as $row) {
                                    echo $row->Estatus;
                                } ?>
                        </td>
                        <td style="border: 1px solid gray;">

                            <a <?php
                                $consulta = $this->db->query('SELECT * FROM solicitudes LIMIT 1');
                                if (empty($consulta->result())) {
                                    echo 'hidden';
                                } else {
                                    echo 'N';
                                } ?> type="button" class="btn btn-success" href="<?= base_url() ?>cacecad/categorias">Detalle</a></td>


                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <?php if ($rol == 1) {
            echo '<button type="button" class="btn btn-success btn-lg" data-dismiss="modal" id="btn-registrar" data-toggle="modal" data-target="#modal-registro"><I class="fas fa-plus"></I> Registrar Usuario! </button>';
            echo '<br/>';
            echo '<br/>';

            echo '<button type="button" class="btn btn-info btn-lg" data-dismiss="modal" id="btn-registrar-sol" data-toggle="modal" data-target="#modal-registro-solicitud"><I class="fas fa-plus"></I> Registrar Solicitud! </button>';
        } ?>



    </center>
    <div class="modal fade" id="modal-registro">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <H4 class="modal-title">Insgresa los datos personales del usuario</H4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" id="modal-nombre" class="form-control" placeholder="Nombre" required="required" />
                        <br />
                        <input type="text" id="modal-appaterno" class="form-control" placeholder="Primer Apellido" required="" autofocus="">
                        <br />
                        <input type="text" id="modal-apmaterno" class="form-control" placeholder="Segundo Apellido" required="" autofocus="">
                        <br />
                        <input type="email" id="modal-correo" class="form-control" placeholder="Correo electrónico" required autofocus="">
                        <br />
                        <input type="password" id="modal-contrasenia" class="form-control" placeholder="Contraseña" required autofocus="">
                        <br />
                        <select type="text" id="modal-rol" class="form-control" placeholder="Ocupación" required autofocus="">
                            <option value="1">Coordinador del Proceso de Evaluación CACECA (Interno, Docente)</option>
                            <option value="2">Colaborador del Proceso de Evaluación CACECA (Interno, Docente)</option>
                            <option value="3">Coordinador de Evaluadores CACECA (Externo)</option>
                            <option value="4">Evaluador del Proceso de Evaluación CACECA (Externo)</option>
                        </select>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><I class="fas fa-times"></I> Cancelar</button>
                            <button type="submit" class="btn btn-info" data-dismiss="modal" id="btn-registrar-usuario" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-user-plus"></I> Registrar! </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-registro-solicitud">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <H4 class="modal-title">Insgresa la información de la solicitud</H4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" id="modal-folio" class="form-control" placeholder="Folio" required="required" />
                        <br />
                        <input type="date" id="modal-fecha" class="form-control" placeholder="Fecha" required="" autofocus="">
                        <br />
                        <input type="text" id="modal-ies" class="form-control" placeholder="IES" required="" autofocus="">
                        <br />
                        <input type="text" id="modal-programa-educativo" class="form-control" placeholder="Programa Educativo" required autofocus="">
                        <br />
                        <input type="text" id="modal-niv-educacional" class="form-control" placeholder="Nivel Educacional" required autofocus="">
                        <br />
                        <select type="text" id="modal-modalidad" class="form-control" placeholder="Modalidad" required autofocus="">
                            <option value="Modalidad Escolarizada">Modalidad Escolarizada</option>
                            <option value="Virtual">Virtual</option>
                            <option value="No Presencial">No Presencial</option>
                        </select>
                        <br />
                        <select type="text" id="modal-estatus" class="form-control" placeholder="Ocupación" required autofocus="">
                            <option value="Acreditación">Acreditación</option>
                            <option value="Reacreditación">Reacreditación</option>
                            <option value="Seguimiento">Seguimiento</option>
                            <option value="Segundo Seguimiento">Segundo Seguimiento</option>
                        </select>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><I class="fas fa-times"></I> Cancelar</button>
                            <button type="submit" class="btn btn-info" data-dismiss="modal" id="btn-registrar-solicitud" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-user-plus"></I> Registrar! </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>