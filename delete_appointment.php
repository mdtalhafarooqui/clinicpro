<?php
include 'config.php';
$id=(int)$_GET['id'];
mysqli_query($conn,"DELETE FROM appointments WHERE id=$id");
header("Location: view_appointments.php");
exit;
?>