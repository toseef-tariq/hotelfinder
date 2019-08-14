<?php
session_start();
unset($_SESSION['idhotel']);
session_destroy();

header("Location: ../index.php");

?>