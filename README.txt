# 🏥 ClinicPro — Modern Clinic Appointment Management System

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Bootstrap-5-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" />
  <img src="https://img.shields.io/badge/Status-Active-success?style=for-the-badge" />
</p>

**ClinicPro** is a lightweight, modern, and responsive clinic appointment booking and management system built using **PHP, MySQL, Bootstrap, and custom UI design.** It allows clinics to manage doctors, patients, appointments, and booking workflows with ease.

---

## 🚀 Features

### 🔹 Patient Features
* **Book Appointments:** Seamless booking with specific doctors.
* **View Status:** Track booked appointments easily.
* **Fast Forms:** Optimized form submission for a better user experience.

### 🔹 Admin & UI Features
* **Management:** Full CRUD for Doctors, Patients, and Appointments.
* **Responsive Design:** Modern gradient theme that works on Mobile and Desktop.
* **Tech Stack:** PHP 8, MySQL, Bootstrap 5, and SVG Illustrations.

---

## 📂 Project Structure

```text
clinicpro/
│── assets/                 # CSS, JS, and Images
│── config.php              # Database Connection
│── index.php               # Homepage / Hero Section
│── doctors.php             # Manage Doctors
│── patients.php            # Manage Patients
│── book.php                # Appointment Booking Form
│── save_booking.php        # Backend logic for saving
│── view_appointments.php   # Appointment List
│── edit_appointment.php    # Edit Logic
│── delete_appointment.php  # Delete Logic
│── db.sql                  # Database Schema for Import
└── README.md               # DocumentationS

---

⚙️ Installation & Setup
​Install XAMPP: Download from Apache Friends.
​Start Services: Open XAMPP Control Panel and start Apache and MySQL.
​Move Files: Place the clinicpro folder inside C:\xampp\htdocs\.
​Setup Database:
​Open http://localhost/phpmyadmin.
​Create a database named clinic_db.
​Import the db.sql file from the project folder.
​Launch: Visit http://localhost/clinicpro in your browser. 

---

​🧪 Database Schema
​The system runs on a relational MySQL structure consisting of:
​doctors: ID, Name, Specialization, Contact.
​patients: ID, Name, Email, Phone.
​appointments: ID, Doctor_ID, Patient_ID, Date, Time, Status.

---

​🌟 Key Highlights
​✅ Clean Code: Ideal for students and developers for learning.
​✅ Modern UI: Uses Bootstrap 5 cards and hover effects.
​✅ GitHub Ready: Standardized folder structure.
​✅ Performance: Lightweight and fast loading.

---

​👤 Author
​Mohammed Talha Farooqui