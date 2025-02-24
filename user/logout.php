<?php
session_start();
session_destroy(); // elimina los datos que estan guardados en el cache momentaneo

header("Location: ../pages/registro.php");

?>