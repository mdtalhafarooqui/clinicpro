<?php
include 'config.php';
$id=(int)$_GET['id'];
$a=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM appointments WHERE id=$id"));
$docs=mysqli_query($conn,"SELECT * FROM doctors ORDER BY name");
$pts=mysqli_query($conn,"SELECT * FROM patients ORDER BY name");
?>
<!doctype html>
<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Edit Appointment - ClinicPro</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><link href="assets/styles.css" rel="stylesheet"></head><body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"><div class="container"><a class="navbar-brand" href="index.php">ClinicPro</a></div></nav>
<div class="container my-5">
<h2>Edit Appointment</h2>
<form method="post" action="update_appointment.php" class="row g-3">
<input type="hidden" name="id" value="<?php echo $a['id'];?>">
<div class="col-md-6">
<select name="patient_id" class="form-select" required>
<?php while($p=mysqli_fetch_assoc($pts)){ $sel=$p['id']==$a['patient_id']?'selected':''; echo "<option value='{$p['id']}' $sel>{$p['name']}</option>"; } ?>
</select>
</div>
<div class="col-md-6">
<select name="doctor_id" class="form-select" required>
<?php while($d=mysqli_fetch_assoc($docs)){ $sel=$d['id']==$a['doctor_id']?'selected':''; echo "<option value='{$d['id']}' $sel>{$d['name']}</option>"; } ?>
</select>
</div>
<div class="col-md-4"><input class="form-control" type="date" name="appt_date" value="<?php echo $a['appt_date'];?>"></div>
<div class="col-md-4"><input class="form-control" type="time" name="appt_time" value="<?php echo $a['appt_time'];?>"></div>
<div class="col-md-12"><textarea class="form-control" name="reason"><?php echo $a['reason'];?></textarea></div>
<div class="col-md-3">
<select name="status" class="form-select">
<option value="Scheduled" <?php if($a['status']=='Scheduled') echo 'selected';?>>Scheduled</option>
<option value="Completed" <?php if($a['status']=='Completed') echo 'selected';?>>Completed</option>
<option value="Cancelled" <?php if($a['status']=='Cancelled') echo 'selected';?>>Cancelled</option>
</select>
</div>
<div class="col-md-2"><button class="btn btn-primary w-100" type="submit">Update</button></div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
