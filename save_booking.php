<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $pid=(int)$_POST['patient_id'];
  $did=(int)$_POST['doctor_id'];
  $dt=mysqli_real_escape_string($conn,$_POST['appt_date']);
  $tm=mysqli_real_escape_string($conn,$_POST['appt_time']);
  $reason=mysqli_real_escape_string($conn,$_POST['reason']);
  $check=mysqli_query($conn,"SELECT id FROM appointments WHERE doctor_id=$did AND appt_date='$dt' AND appt_time='$tm'");
  if(mysqli_num_rows($check)>0){ header("Location: book.php?err=slot"); exit; }
  mysqli_query($conn,"INSERT INTO appointments(patient_id,doctor_id,appt_date,appt_time,reason) VALUES($pid,$did,'$dt','$tm','$reason')");
}
header("Location: view_appointments.php");
exit;
?>