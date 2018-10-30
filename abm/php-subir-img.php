<?php
$imageName = basename($_FILES["imagen"]["imagen"]);

move_uploaded_file($_FILES["imagen"]["tmp_name"], 'estilos/img/');