<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['name'])){
  $n=mysqli_real_escape_string($conn,$_POST['name']);
  $s=mysqli_real_escape_string($conn,$_POST['specialization']);
  $p=mysqli_real_escape_string($conn,$_POST['phone']);
  mysqli_query($conn,"INSERT INTO doctors(name,specialization,phone) VALUES('$n','$s','$p')");
  header("Location: doctors.php");
  exit;
}
$docs=mysqli_query($conn,"SELECT * FROM doctors ORDER BY name");
?>
<!doctype html>
<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Doctors - ClinicPro</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><link href="assets/styles.css" rel="stylesheet"></head><body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"><div class="container"><a class="navbar-brand" href="index.php">ClinicPro</a></div></nav>
<div class="container my-5">
<div class="d-flex justify-content-between align-items-center mb-3">
<h2>Doctors</h2>
<a class="btn btn-success" href="index.php">Back</a>
</div>
<div class="card p-3 mb-4">
<form method="post" class="row g-2">
<div class="col-md-4"><input class="form-control" type="text" name="name" placeholder="Doctor Name" required></div>
<div class="col-md-3"><input class="form-control" type="text" name="specialization" placeholder="Specialization"></div>
<div class="col-md-3"><input class="form-control" type="text" name="phone" placeholder="Phone"></div>
<div class="col-md-2"><button class="btn btn-primary w-100" type="submit">Add Doctor</button></div>
</form>
</div>
<table class="table table-striped">
<thead><tr><th>ID</th><th>Name</th><th>Specialization</th><th>Phone</th></tr></thead>
<tbody>
<?php while($r=mysqli_fetch_assoc($docs)){ echo "<tr><td>{$r['id']}</td><td>{$r['name']}</td><td>{$r['specialization']}</td><td>{$r['phone']}</td></tr>"; } ?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
