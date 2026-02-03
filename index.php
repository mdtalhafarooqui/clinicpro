<?php
include 'config.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>ClinicPro - Appointment System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/styles.css" rel="stylesheet">
</head>
<body>
<header class="hero">
<div class="overlay"></div>
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">
<a class="navbar-brand fw-bold" href="index.php">ClinicPro</a>
</div>
</nav>
<div class="container hero-content">
<div class="row align-items-center">
<div class="col-md-6">
<h1 class="display-4">ClinicPro</h1>
<p class="lead">Fast booking, easy management, modern interface.</p>
<div class="mt-4">
<a class="btn btn-primary btn-lg me-2" href="book.php">Book Appointment</a>
<a class="btn btn-outline-light btn-lg" href="view_appointments.php">View Appointments</a>
</div>
</div>
<div class="col-md-6 text-center">
<img src="assets/images/hero2.svg" class="img-fluid hero-img" alt="doctor">
</div>
</div>
</div>
</header>
<main class="container my-5">
<div class="row g-4">
<div class="col-md-3">
<a class="card card-hover text-center p-4 service-equal" href="doctors.php">
<img src="assets/images/hero1.svg" style="height:70px;opacity:0.9" alt="">
<h5 class="mt-3">Doctors</h5>
<p class="small text-muted">Manage doctors</p>
</a>
</div>
<div class="col-md-3">
<a class="card card-hover text-center p-4 service-equal" href="patients.php">
<div class="icon-box">+</div>
<h5 class="mt-3">Patients</h5>
<p class="small text-muted">Register patients</p>
</a>
</div>
<div class="col-md-3">
<a class="card card-hover text-center p-4 service-equal" href="book.php">
<div class="icon-box">&#128197;</div>
<h5 class="mt-3">Book</h5>
<p class="small text-muted">Schedule appointments</p>
</a>
</div>
<div class="col-md-3">
<a class="card card-hover text-center p-4 service-equal" href="view_appointments.php">
<div class="icon-box">&#128065;</div>
<h5 class="mt-3">View</h5>
<p class="small text-muted">View and manage</p>
</a>
</div>
</div>
</main>
<footer class="text-center py-4 small text-muted">
<div class="container">
    ©Copyright and Developed By IT Dept @VJIT Mohammed Talha Farooqui
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
