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
    <SCRIPT src="<?= base_url() ?>static/js/j9.js"></SCRIPT>
</head>

<body class="">
    <center>
        <div class="modal fade" id="modal-mensaje">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <DIV id="mensaje"></DIV>
                    </div>
                </div>
            </div>
        </div>
        <input id="nombre" value="<?= $nombre ?>" disabled hidden>
        <input id="appaterno" value="<?= $appaterno ?>" disabled hidden>
        <input id="apmaterno" value="<?= $apmaterno ?>" disabled hidden>
        <center>
            <img style="width: 450px;" src="<?php echo base_url('static/images/logo.png'); ?>" />
        </center>

        <center>
            <a style="align-content:flex-start;" type="button" class="btn btn-warning" href="<?= base_url() ?>cacecad/categorias">
                <h5>Regresar</h5>
            </a>
        </center>
        <br />
        <div id="categoria9" class="collapsed" style="width: 1300px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.1: INFRAESTRUCTURA</p>
                        </th>
                    </tr>
                </thead>
                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.1.1" disabled size="1" id="criterio"> ¿Se cuenta con la infraestructura física adecuada para el desarrollo de las actividades académicas como: aulas, talleres, laboratorios y cubículos?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload139' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.1.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra139">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="4" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies" size="1" maxlength="1" value="<?php
                                                                                            $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                                                            foreach ($consulta->result() as $row) {
                                                                                                echo $row->ies;
                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                                                        echo $row->justificación;
                                                                                                                                                    } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental" size="70" value="<?php
                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                    echo $row->evidencia_documental;
                                                                                                                } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado" size="70" value="<?php
                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                    echo $row->porcentaje_alcanzado;
                                                                                                                } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                    $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.1"');
                                                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                                                        echo $row->comentario;
                                                                                                                                                    } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.1.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                                                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                                                                                echo $row->justificación;
                                                                                                                                                                            } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.1.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.1"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->
            <!--- 1 -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.1: INFRAESTRUCTURA</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.1.2" disabled size="1" id="criterio1">¿Se cuenta con instalaciones adecuadas para actividades deportivas y culturales?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload140' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.1.2', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href=' . base_url() . 'c9/borra140">Borrar Archivos</a>';
                        } ?>

                    </th>
                    <th>
                        <center><input disabled value="4" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center><input <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> type="text" id="valor_obtenido1" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor1" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies1" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies1" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th> Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación1" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion1" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental1" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia1" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado1" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje1" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones1" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j1" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones1" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones1">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios1" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios1">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.1.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación1" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.1.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.2"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario1" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario1" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->
            <!--- 2 -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.1: INFRAESTRUCTURA</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.1.3" disabled size="1" id="criterio2"> ¿Se operan programas formales para el mantenimiento preventivo de la infraestructura física y los equipos, así como atención al mantenimiento correctivo
                    </th>

                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload141' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.1.3', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra141">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="6" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido2" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor2" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies2" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies2" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación2" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion2" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental2" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia2" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado2" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje2" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones2" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j2" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones2" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones2">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios2" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios2">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones2">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.1.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación2" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-comentarios2">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.1.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.3"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario2" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario2" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->
            <!--- 3 -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.1: INFRAESTRUCTURA</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.1.4" disabled size="1" id="criterio3"> ¿Se cuenta con medidas de seguridad, higiene y protección civil?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload142' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.1.4', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra142">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido3" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor3" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies3" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies3" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación3" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion3" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental3" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia3" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado3" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje3" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones3" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.4"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j3" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones3" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones3">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios3" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios3">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones3">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.1.4</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación3" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.1.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios3">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.1.4</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.1.4"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario3" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario3" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead></thead>
                <tr>
                    <th rowspan="2">
                        <center>
                            Total Criterio 9.1<br />
                            Infraestructura
                        </center>
                    </th>
                    <th>
                        <center>
                            Valor Máximo
                        </center>
                    </th>
                    <th>
                        <center>
                            Valor Comité
                        </center>
                    </th>
                </tr>

                <tr>
                    <th>
                        <center>
                            19
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias9 WHERE criterio = "9.1.1" OR criterio = "9.1.2" OR criterio = "9.1.3" OR criterio = "9.1.3"');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <!--- 4 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.2: EQUIPAMIENTO</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.2.1" disabled size="1" id="criterio4"> ¿Se cuenta con equipos de cómputo adecuados para el desarrollo de las actividades de los docentes?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload143' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.2.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra143">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="4" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido4" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor4" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies4" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies4" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación4" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion4" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental4" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia4" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado4" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje4" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones4" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j4" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones4" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones4">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios4" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios4">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones4">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.2.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación4" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios4">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.2.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.1"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario4" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario4" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <!--- 5 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.2: EQUIPAMIENTO</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.2.2" disabled size="1" id="criterio5"> ¿Al utilizar los laboratorios de cómputo se cuenta con un equipo por estudiante?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload144' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.2.2', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra144">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="4" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido5" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor5" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies5" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies5" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación5" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion5" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental5" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia5" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado5" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje5" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones5" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j5" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones5" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones5">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios5" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios5">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones5">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.2.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación5" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios5">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.2.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.2"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario5" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario5" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <!--- 6 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.2: EQUIPAMIENTO</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.2.3" disabled size="1" id="criterio6"> ¿Se cuenta con equipo de cómputo y video proyector en cada aula?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload145' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.2.3', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra145">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido6" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor6" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies6" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies6" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación6" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion6" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental6" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia6" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado6" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje6" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones6" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j6" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones6" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones6">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios6" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios6">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones6">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.2.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación6" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios6">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.2.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.3"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario6" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario6" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <!--- 7 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.2: EQUIPAMIENTO</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.2.4" disabled size="1" id="criterio7"> ¿Se cuenta con equipos de cómputo adecuados para el desarrollo de las actividades administrativas?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload146' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.2.4', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra146">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="4" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido7" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor7" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies7" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies7" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación7" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion7" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental7" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia7" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado7" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje7" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones7" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.4"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j7" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones7" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones7">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios7" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios7">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones7">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.2.4</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación7" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios7">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.2.4</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.4"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario7" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario7" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <!--- 8 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 9: Infraestructura y equipamiento
                        </th>
                        <th colspan="5">
                            <p>Criterio 9.2: EQUIPAMIENTO</p>
                        </th>
                    </tr>
                </thead>

                <tr>
                    <th width=50%>Criterios</th>
                    <th width=5%>Anexo</th>
                    <th width=5%>Valor Máximo</th>
                    <th width=5%>Valor Obtenido</th>
                    <th width=5%>IES</th>
                </tr>
                <tr>
                    <th>
                        <input value="9.2.5" disabled size="1" id="criterio8"> 9.2.5. ¿Se cuenta con sistemas y equipos de comunicación adecuados?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c9/fileUpload147' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria9/criterio_9.2.5', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c9/borra147">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido8" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor8" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies8" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies8" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Justificación:<br />
                        <div>
                            <textarea <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="justificación8" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion8" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la justificación solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Evidencia Documental:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="evidencia_documental8" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia8" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar la evidencia documental solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Cálculo de Porcentaje:<br />
                        <input <?php if ($rol == 3 || $rol == 4) {
                                    echo 'disabled';
                                } ?> required="required" type="text" id="porcentaje_alcanzado8" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje8" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '</center>';
                            echo '<i>Nota: Si deseas eliminar el cálculo de porcentaje solo borra todo el campo de texto y presiona el botón "modificar". </i>';
                        }
                        ?>
                    </th>

                </tr>
                <tr>
                    <th>
                        Observaciones:<br />
                        <div>
                            <textarea <?php if ($rol == 1 || $rol == 2) {
                                            echo 'disabled';
                                        } ?> required="required" type="text" id="observaciones8" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.5"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j8" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones8" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones8">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios8" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios8">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones8">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 9.2.5</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center>
                                                Nombre <br />Completo
                                            </center>
                                        </td>
                                        <td>
                                            <center> Observación </center>
                                        </td>
                                        <td>
                                            <center> Valor <br />Obtenido</center>
                                        </td>
                                        <td>
                                            <center>Fecha</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->nombre;
                                                    echo '<br/>';
                                                    echo $row->appaterno;
                                                    echo '<br/>';
                                                    echo $row->apmaterno;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <div>
                                                <textarea disabled type=" text" id="justificación" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                                                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                                                                                echo $row->justificación;
                                                                                                                                                                            } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias9 where criterio = "9.2.5"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->fecha;
                                                } ?>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-comentarios8">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 9.2.5</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "9.2.5"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario8" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario8" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <table class="table table-bordered">
                <thead></thead>
                <tr>
                    <th rowspan="2">
                        <center>
                            Total Criterio 9.2<br />
                            Equipamiento
                        </center>
                    </th>
                    <th>
                        <center>
                            Valor Máximo
                        </center>
                    </th>
                    <th>
                        <center>
                            Valor Comité
                        </center>
                    </th>
                </tr>

                <tr>
                    <th>
                        <center>
                            22
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias9 WHERE criterio = "9.2.1" OR criterio = "9.2.2" OR criterio ="9.2.3" OR criterio = "9.2.4" OR criterio = "9.2.5"');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>


            <table class="table table-bordered">
                <thead></thead>
                <tr>
                    <th rowspan="2">
                        <center>
                            Total Categoria 9<br />
                            Infraestructura y equipamiento
                        </center>
                    </th>
                    <th>
                        <center>
                            Valor Máximo
                        </center>
                    </th>
                    <th>
                        <center>
                            Valor Comité
                        </center>
                    </th>
                </tr>

                <tr>
                    <th>
                        <center>
                            41
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias9');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>
        </div>
    </center>

    <br />
    <br />
    <center>
        <a type="button" class="btn btn-success btn-lg" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria10">Siguiente Categoria</a>
    </center>
    <br />
    <br />
</body>

</html>