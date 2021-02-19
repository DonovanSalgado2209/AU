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
    <SCRIPT src="<?= base_url() ?>static/js/j7.js"></SCRIPT>
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
        <div id="categoria7" class="collapsed" style="width: 1300px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.1: VINCULACIÓN CON LOS SECTORES PÚBLICO, PRIVADO Y SOCIAL</p>
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
                        <input value="7.1.1" disabled size="1" id="criterio"> ¿La institución mantiene convenios con organismos del sector público, privado y social?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload111' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.1.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra111">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
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
                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
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
                                                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
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
                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
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
                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
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
                                                                                                                                                    $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.1"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.1.1</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
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
                                                                                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
                                                                                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                                                                                echo $row->justificación;
                                                                                                                                                                            } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.1"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.1.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.1"');
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.1: VINCULACIÓN CON LOS SECTORES PÚBLICO, PRIVADO Y SOCIAL</p>
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
                        <input value="7.1.2" disabled size="1" id="criterio1">¿Existe vinculación con el sector productivo (visitas técnicas a empresas, prácticas escolares y estancias profesionales)?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload112' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.1.2', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href=' . base_url() . 'c7/borra112">Borrar Archivos</a>';
                        } ?>

                    </th>
                    <th>
                        <center><input disabled value="7" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center><input <?php if ($rol == 3 || $rol == 4) {
                                            echo 'disabled';
                                        } ?> type="text" id="valor_obtenido1" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.2"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.1.2</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
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
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.2"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.1.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.2"');
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.1: VINCULACIÓN CON LOS SECTORES PÚBLICO, PRIVADO Y SOCIAL</p>
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
                        <input value="7.1.3" disabled size="1" id="criterio2">¿Se opera una normativa para las prácticas escolares y estancias profesionales?
                    </th>

                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload113' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.1.3', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra113">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="4" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido2" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.3"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.1.3</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
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
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.3"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.1.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.3"');
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.1: VINCULACIÓN CON LOS SECTORES PÚBLICO, PRIVADO Y SOCIAL</p>
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
                        <input value="7.1.4" disabled size="1" id="criterio3">¿El 20% de la matrícula de alumnos realiza actividades vinculadas con el sector productivo?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload114' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.1.4', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra114">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="15" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido3" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.4"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.1.4</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
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
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.4"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.1.4</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.4"');
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.1: VINCULACIÓN CON LOS SECTORES PÚBLICO, PRIVADO Y SOCIAL</p>
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
                        <input value="7.1.5" disabled size="1" id="criterio4"> ¿Existe en operación un Consejo de vinculación?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload115' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.1.5', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra115">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="3" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido4" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.5"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.1.5</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
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
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.1.5"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.1.5</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.1.5"');
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
            <table class="table table-bordered">
                <thead></thead>
                <tr>
                    <th rowspan="2">
                        <center>
                            Total Criterio 7.1<br />
                            Vinculación con los sectores público,<br />privado y social
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
                            34
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7 WHERE criterio = "7.1.1" OR criterio = "7.1.2" OR criterio = "7.1.3" OR criterio = "7.1.4" OR criterio = "7.1.5"');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.2: SEGUIMIENTO DE EGRESADOS</p>
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
                        <input value="7.2.1" disabled size="1" id="criterio5"> ¿Existe un registro actualizado de datos generales de los egresados?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload116' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.2.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra116">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido5" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.2.1"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.2.1</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
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
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.1"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.2.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.2.1"');
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.2: SEGUIMIENTO DE EGRESADOS</p>
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
                        <input value="7.2.2" disabled size="1" id="criterio6"> ¿Existen instrumentos para evaluar el desempeño de los egresados en el mercado laboral?<br />
                        a) Encuesta periódica a los egresados para conocer su situación laboral.<br />
                        b) Encuesta periódica a los empleadores para conocer el desempeño profesional de los egresados.

                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload117' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.2.2', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra117">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="12" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido6" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
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
                                } ?> required="required" type="text" id="evidencia_documental6" size="70" value="<?
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = " 7.2.2"'); foreach ($consulta->result() as $row) {
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.2.2"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.2.2</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
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
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.2"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.2.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.2.2"');
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.2: SEGUIMIENTO DE EGRESADOS</p>
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
                        <input value="7.2.3" disabled size="1" id="criterio7"> ¿Se cuenta con mecanismos para incorporar los resultados de las encuestas de seguimiento de egresados a la reestructuración del plan de estudios?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload118' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.2.3', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra118">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="6" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido7" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.2.3"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.2.3</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
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
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.2.3"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.2.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.2.3"');
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
            <table class="table table-bordered">
                <thead></thead>
                <tr>
                    <th rowspan="2">
                        <center>
                            Total Criterio 7.2<br />
                            Seguimiento de egresados
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
                            23
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7 WHERE criterio = "7.2.1" OR criterio = "7.2.2" OR criterio = "7.2.3"');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>
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
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.3: INTERCAMBIO ACADÉMICO</p>
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
                        <input value="7.3.1" disabled size="1" id="criterio8"> ¿Se mantienen en operación convenios de intercambio académico y científico con otras instituciones educativas nacionales y extranjeras?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload119' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.3.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra119">Borrar Archivos</a>';
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
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
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
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
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
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
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
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.1"');
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
                            <H4 class="modal-title">Observaciones del parametro 7.3.1</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
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
                                                                                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
                                                                                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                                                                                echo $row->justificación;
                                                                                                                                                                            } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.1"');
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
                            <H4 class="modal-title">Comentario para el parametro 7.3.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.1"');
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
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->
            <!--- 9 -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.3: INTERCAMBIO ACADÉMICO</p>
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
                        <input value="7.3.2" disabled size="1" id="criterio9"> ¿Existe intercambio de profesores del programa educativo con otras instituciones educativas nacionales y extranjeras? Mostrar resultados?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload120' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.3.2', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra120">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="8" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido9" size="1" maxlength="1" value="<?php
                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                            echo $row->valor_obtenido;
                                                                                                        } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor9" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies9" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies9" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación9" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion9" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental9" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia9" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado9" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje9" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones9" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j9" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones9" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones9">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios9" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios9">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones9">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.3.2</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
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
                                                <textarea disabled type=" text" id="justificación9" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.2"');
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

            <div class="modal fade" id="modal-comentarios9">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.3.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.2"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario9" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario9" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <!--- 10 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.3: INTERCAMBIO ACADÉMICO</p>
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
                        <input value="7.3.3" disabled size="1" id="criterio10"> ¿Se opera un programa de movilidad de estudiantes en instituciones educativas nacionales y extranjeras y cuáles son sus resultados?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload121' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.3.3', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra121">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="8" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido10" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor10" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies10" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies10" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación10" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion10" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental10" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia10" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado10" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje10" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones10" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j10" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones10" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones10">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios10" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios10">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones10">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.3.3</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
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
                                                <textarea disabled type=" text" id="justificación10" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.3"');
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

            <div class="modal fade" id="modal-comentarios10">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.3.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.3"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario10" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario10" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->
            <!--- 11 -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.3: INTERCAMBIO ACADÉMICO</p>
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
                        <input value="7.3.4" disabled size="1" id="criterio11"> ¿Se participa en redes de colaboración nacionales y extranjeras que fortalezcan al programa académico?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload122' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.3.4', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra122">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido11" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor11" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies11" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies11" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación11" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion11" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental11" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia11" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado11" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje11" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones11" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.4"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j11" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones11" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones11">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios11" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios11">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones11">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.3.4</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
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
                                                                                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
                                                                                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                                                                                echo $row->justificación;
                                                                                                                                                                            } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.3.4"');
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

            <div class="modal fade" id="modal-comentarios11">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.3.4</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.3.4"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario11" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario11" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
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
                            Total Criterio 7.3<br />
                            Intercambio académico
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
                            26
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7 WHERE criterio = "7.3.1" OR criterio = "7.3.2" OR criterio = "7.3.3" OR criterio = "7.3.4"');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <!--- 12 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.4: SERVICIO SOCIAL</p>
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
                        <input value="7.4.1" disabled size="1" id="criterio12"> ¿Se tiene un control de las actividades que realizan los estudiantes para cubrir las 480 horas de servicio social?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload123' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.4.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra123">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido12" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor12" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies12" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies12" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación12" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion12" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental12" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia12" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado12" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje12" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones12" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.4.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j12" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones12" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones12">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios12" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios12">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones12">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.4.1</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
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
                                                                                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
                                                                                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                                                                                echo $row->justificación;
                                                                                                                                                                            } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.1"');
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

            <div class="modal fade" id="modal-comentarios12">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.4.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.4.1"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario12" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario12" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <!--- 13 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.4: SERVICIO SOCIAL</p>
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

                        <input value="7.4.2" disabled size="1" id="criterio13"> ¿El 100% de los estudiantes que han iniciado los trámites de titulación han prestado su servicio social?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload124' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.4.2', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra124">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido13" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor13" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies13" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies13" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación13" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion13" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental13" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia13" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado13" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje13" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones13" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.4.2"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j13" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones13" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones13">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios13" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios13">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones13">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.4.2</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
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
                                                <textarea disabled type=" text" id="justificación13" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.2"');
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

            <div class="modal fade" id="modal-comentarios13">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.4.2</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.4.2"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario13" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario13" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <!--- 14 -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.4: SERVICIO SOCIAL</p>
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

                        <input value="7.4.3" disabled size="1" id="criterio14"> ¿Se cuenta con instrumentos y mecanismos para evaluar las actividades del servicio social?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload125' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.4.3', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra125">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido14" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor14" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies14" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies14" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación14" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion14" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental14" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia14" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado14" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje14" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones14" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.4.3"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j14" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones14" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones14">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios14" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios14">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones14">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.4.3</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
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
                                                <textarea disabled type=" text" id="justificación14" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.4.3"');
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

            <div class="modal fade" id="modal-comentarios14">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.4.3</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.4.3"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario14" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario14" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
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
                            Total Criterio 7.4<br />
                            Servicio social
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
                            15
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7 WHERE criterio = "7.4.1" OR criterio = "7.4.2"  OR criterio = "7.4.3"');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->
            <!--- 15 -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.5: BOLSA DE TRABAJO</p>
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
                        <input value="7.5.1" disabled size="1" id="criterio15"> ¿Se opera una bolsa de trabajo que facilite la inserción al mercado laboral de los estudiantes y egresados?
                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload126' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.5.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra126">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="5" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido15" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor15" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies15" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies15" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación15" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion15" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental15" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia15" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado15" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje15" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones15" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.5.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j15" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones15" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones15">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios15" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios15">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones15">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.5.1</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
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
                                                <textarea disabled type=" text" id="justificación15" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.5.1"');
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

            <div class="modal fade" id="modal-comentarios15">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.5.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.5.1"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario15" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario15" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
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
                            Total Criterio 7.5<br />
                            Bolsa de trabajo
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
                            5
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7 WHERE criterio = "7.5.1" ');
                            foreach ($consulta->result() as $row) {
                                echo $row->total;
                            } ?>
                        </center>
                    </th>
                </tr>
            </table>
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->
            <!--- 16 -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Categoría 7: Vinculación - Extensión
                        </th>
                        <th colspan="5">
                            <p>Criterio 7.6: EXTENSIÓN</p>
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
                        <input value="7.6.1" disabled size="1" id="criterio16"> ¿Cómo mínimo se tienen 10 proyectos de extensión?, entre otros<br />
                        - Educación continua,- Servicio Externo (Asesorías, Clínicas, Conferencias y Proyectos Especiales que permiten obtener recursos financieros adicionales)<br />
                        - Centros de lenguas extranjeras.<br />
                        - Servicios Comunitarios Gratuitos<br />
                        - Difusión Cultural<br />
                        - Obra Editorial

                    </th>
                    <th width='50%'>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<div class="content">';
                            echo "<form action='" . base_url() . "/c7/fileUpload127' class='dropzone' id='fileupload'>";
                            echo '</form>';
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $files = get_filenames('uploads/categoria7/criterio_7.6.1', FALSE);
                        if ($files) {
                            $data['files'] = $files;
                        } else {
                            $data['files'] = NULL;
                        }
                        $this->load->view('filenames', $data);
                        ?>
                        <br />
                        <?php if ($rol == 1) {
                            echo ' <a type="button" class="btn btn-danger" href="' . base_url() . 'c7/borra127">Borrar Archivos</a>';
                        } ?>
                    </th>
                    <th>
                        <center><input disabled value="15" type="text" size="1" maxlength="1"></center>
                    </th>
                    <th>
                        <center>
                            <input <?php if ($rol == 3 || $rol == 4) {
                                        echo 'disabled';
                                    } ?> type="text" id="valor_obtenido16" size="1" maxlength="1" value="<?php
                                                                                                            $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
                                                                                                            foreach ($consulta->result() as $row) {
                                                                                                                echo $row->valor_obtenido;
                                                                                                            } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-valor16" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
                            echo '<br />';
                            echo '</center>';
                        }
                        ?>
                    </th>
                    <th>
                        <center>
                            <input type="text" <?php if ($rol == 3 || $rol == 4) {
                                                    echo 'disabled';
                                                } ?> id="ies16" size="1" maxlength="1" value="<?php
                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
                                                                                                foreach ($consulta->result() as $row) {
                                                                                                    echo $row->ies;
                                                                                                } ?>">
                        </center>
                        <br />
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-ies16" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="justificación16" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->justificación;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-justificacion16" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="evidencia_documental16" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->evidencia_documental;
                                                                                                                    } ?>">
                    </th>
                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-evidencia16" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                } ?> required="required" type="text" id="porcentaje_alcanzado16" size="70" value="<?php
                                                                                                                    $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
                                                                                                                    foreach ($consulta->result() as $row) {
                                                                                                                        echo $row->porcentaje_alcanzado;
                                                                                                                    } ?>">
                    </th>

                    <th>
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<center>';
                            echo '<button id="btn-actualizar-porcentaje16" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-mensaje"><I class="fas fa-edit"></I>Modificar </button>';
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
                                        } ?> required="required" type="text" id="observaciones16" style=" resize: none" class="form-control" rows="5"><?php
                                                                                                                                                        $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.6.1"');
                                                                                                                                                        foreach ($consulta->result() as $row) {
                                                                                                                                                            echo $row->comentario;
                                                                                                                                                        } ?></textarea>
                        </div>
                    </th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;"></th>
                    <th style="border-color: white;">
                        <?php if ($rol == 1 || $rol == 2) {
                            echo '<button type="button" class="btn btn-success" id="btn-j16" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>';
                        } else {
                            echo '<button type="button" class="btn btn-info" id="btn-observaciones16" data-dissmiss="modal" data-toggle="modal" data-target="#modal-observaciones16">Observaciones</button>';
                            echo '<br/>';
                            echo '<br/>';

                            echo '<button type="button" class="btn btn-info" id="btn-comentarios16" data-dissmiss="modal" data-toggle="modal" data-target="#modal-comentarios16">Realizar Comentarios</button>';
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <div class="modal fade" id="modal-observaciones16">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Observaciones del parametro 7.6.1</H4>
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
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
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
                                                <textarea disabled type=" text" id="justificación16" style="resize: none; border-color: white;" class="form-control" rows="5"><?php
                                                                                                                                                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
                                                                                                                                                                                foreach ($consulta->result() as $row) {
                                                                                                                                                                                    echo $row->justificación;
                                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
                                                foreach ($consulta->result() as $row) {
                                                    echo $row->valor_obtenido;
                                                } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $consulta = $this->db->query('SELECT * FROM categorias7 where criterio = "7.6.1"');
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

            <div class="modal fade" id="modal-comentarios16">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H4 class="modal-title">Comentario para el parametro 7.6.1</H4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table id="classTable" class="table table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comentario:
                                            <br /> <textarea <?php $consulta = $this->db->query('SELECT * FROM comentarios where criterio = "7.6.1"');
                                                                foreach ($consulta->result() as $row) {
                                                                    if (!empty($row->comentario)) {
                                                                        echo 'disabled';
                                                                    } else {
                                                                    }
                                                                } ?> id="comentario16" type="text" style=" resize: none" class="form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button aria-required="required" class="btn btn-success" type="button" id="guarda-comentario16" data-toggle="modal" data-target="#modal-mensaje">Guardar</button>
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
                            Total Criterio 7.6<br />
                            Extensión
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
                            15
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7 WHERE criterio = "7.6.1"');
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
                            Total Categoría 7<br />
                            Vinculación - Extensión
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
                            118
                        </center>
                    </th>
                    <th>
                        <center>
                            <?php
                            $consulta = $this->db->query('SELECT sum(valor_obtenido) as total FROM categorias7');
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
        <a type="button" class="btn btn-success btn-lg" aria-expanded="false" href="<?= base_url() ?>cacecad/categoria8">Siguiente Categoria</a>
    </center>
    <br />
    <br />

</body>

</html>