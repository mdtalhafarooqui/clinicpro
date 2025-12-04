<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['name'])){
  $n=mysqli_real_escape_string($conn,$_POST['name']);
  $ph=mysqli_real_escape_string($conn,$_POST['phone']);
  $em=mysqli_real_escape_string($conn,$_POST['email']);
  mysqli_query($conn,"INSERT INTO patients(name,phone,email) VALUES('$n','$ph','$em')");
  header("Location: patients.php");
  exit;
}
$pts=mysqli_query($conn,"SELECT * FROM patients ORDER BY name");
?>
<!doctype html>
<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Patients - ClinicPro</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><link href="assets/styles.css" rel="stylesheet"></head><body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"><div class="container"><a class="navbar-brand" href="index.php">ClinicPro</a></div></nav>
<div class="container my-5">
<div class="d-flex justify-content-between align-items-center mb-3">
<h2>Patients</h2>
<a class="btn btn-success" href="index.php">Back</a>
</div>
<div class="card p-3 mb-4">
<form method="post" class="row g-2">
<div class="col-md-4"><input class="form-control" type="text" name="name" placeholder="Patient Name" required></div>
<div class="col-md-3"><input class="form-control" type="text" name="phone" placeholder="Phone"></div>
<div class="col-md-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
<div class="col-md-2"><button class="btn btn-primary w-100" type="submit">Add Patient</button></div>
</form>
</div>
<table class="table table-striped">
<thead><tr><th>ID</th><th>Name</th><th>Phone</th><th>Email</th></tr></thead>
<tbody>
<?php while($r=mysqli_fetch_assoc($pts)){ echo "<tr><td>{$r['id']}</td><td>{$r['name']}</td><td>{$r['phone']}</td><td>{$r['email']}</td></tr>"; } ?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
