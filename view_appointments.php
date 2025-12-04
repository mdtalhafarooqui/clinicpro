<?php
include 'config.php';

$q = "SELECT a.id, p.name AS patient, d.name AS doctor, a.appt_date, a.appt_time, a.status 
      FROM appointments a
      JOIN patients p ON a.patient_id = p.id
      JOIN doctors d ON a.doctor_id = d.id
      ORDER BY a.appt_date DESC, a.appt_time DESC";

$res = mysqli_query($conn, $q);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Appointments - ClinicPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/ui.css">

    <style>
        .page-header {
            background: rgba(255, 255, 255, 0.15);
            padding: 20px 30px;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            color: #fff;
            margin-bottom: 25px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.12);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            padding: 25px;
            color: #fff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
        }

        table {
            border-radius: 20px !important;
            overflow: hidden;
        }

        th {
            background: rgba(255, 255, 255, 0.3);
            color: #000;
        }

        .badge-status {
            padding: 7px 12px;
            border-radius: 12px;
            color: #fff;
            font-size: 13px;
        }

        .Scheduled {
            background-color: #1e90ff;
        }
        .Completed {
            background-color: #28a745;
        }
        .Cancelled {
            background-color: #dc3545;
        }

        .back-btn {
            background: #fff;
            padding: 10px 18px;
            border-radius: 12px;
            margin-top: 20px;
            color: #000;
            text-decoration: none;
            font-weight: 500;
        }
        .back-btn:hover {
            background: #eaeaea;
        }
    </style>

</head>
<body>

<div class="container mt-4">

    <!-- Header -->
    <div class="page-header">
        <h2 class="m-0">📅 View Appointments</h2>
    </div>

    <!-- Card -->
    <div class="glass-card">

        <div class="table-responsive">
            <table class="table table-bordered table-striped bg-white text-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Patient</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if(mysqli_num_rows($res) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($res)): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td>👤 <?= $row['patient'] ?></td>
                                <td>🩺 <?= $row['doctor'] ?></td>
                                <td><?= $row['appt_date'] ?></td>
                                <td><?= $row['appt_time'] ?></td>
                                <td>
                                    <span class="badge-status <?= $row['status'] ?>">
                                        <?= $row['status'] ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endwhile; ?>

                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">No appointments found.</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>

        <a href="index.php" class="back-btn">← Back to Home</a>
    </div>

</div>

</body>
</html>
