<?php
if ($files) {
    echo heading('', 6);

    foreach ($files as $file) {

        echo anchor('c1/downloads/' . $file, $file) . br(1);
    }
} else {

    echo heading('No hay archivos para descargar', 7);
}
