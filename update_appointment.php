<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id=(int)$_POST['id'];
  $pid=(int)$_POST['patient_id'];
  $did=(int)$_POST['doctor_id'];
  $dt=mysqli_real_escape_string($conn,$_POST['appt_date']);
  $tm=mysqli_real_escape_string($conn,$_POST['appt_time']);
  $reason=mysqli_real_escape_string($conn,$_POST['reason']);
  $status=mysqli_real_escape_string($conn,$_POST['status']);
  mysqli_query($conn,"UPDATE appointments SET patient_id=$pid,doctor_id=$did,appt_date='$dt',appt_time='$tm',reason='$reason',status='$status' WHERE id=$id");
}
header("Location: view_appointments.php");
exit;
?>