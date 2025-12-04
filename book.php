<?php
include 'config.php';
$docs=mysqli_query($conn,"SELECT * FROM doctors ORDER BY name");
$pts=mysqli_query($conn,"SELECT * FROM patients ORDER BY name");
?>
<!doctype html>
<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Book Appointment - ClinicPro</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><link href="assets/styles.css" rel="stylesheet"><script src="assets/script.js"></script></head><body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"><div class="container"><a class="navbar-brand" href="index.php">ClinicPro</a></div></nav>
<div class="container my-5">
<h2>Book Appointment</h2>
<?php if(isset($_GET['err']) && $_GET['err']=='slot'){ echo '<div class="alert alert-danger">Selected time slot is already booked</div>'; } ?>
<form method="post" action="save_booking.php" onsubmit="return validateBooking()" class="row g-3">
<div class="col-md-6">
<select id="patient_id" name="patient_id" class="form-select" required>
<option value="">Select Patient</option>
<?php while($p=mysqli_fetch_assoc($pts)){ echo "<option value='{$p['id']}'>{$p['name']}</option>"; } ?>
</select>
</div>
<div class="col-md-6">
<select id="doctor_id" name="doctor_id" class="form-select" required>
<option value="">Select Doctor</option>
<?php mysqli_data_seek($docs,0); while($d=mysqli_fetch_assoc($docs)){ echo "<option value='{$d['id']}'>{$d['name']} - {$d['specialization']}</option>"; } ?>
</select>
</div>
<div class="col-md-4"><input class="form-control" type="date" id="appt_date" name="appt_date" required></div>
<div class="col-md-4"><input class="form-control" type="time" id="appt_time" name="appt_time" required></div>
<div class="col-md-12"><textarea class="form-control" name="reason" placeholder="Reason"></textarea></div>
<div class="col-md-2"><button class="btn btn-primary w-100" type="submit">Book</button></div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
