<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
  echo $_SESSION['Usuario'];
  header("Location: ../../index.php");
} else {
include '../../config/Conexion.php';
require '../layouts/header.php';
?>


<?php
require '../layouts/scripts.php';
}
?>