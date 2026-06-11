<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment - Puffluff Dog Spa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<body>

<header>
    <h1>🐾 Puffluff Dog Spa</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="layanan.php">Services</a>
        <a href="harga.php">Pricing</a>
        <a href="booking.php">Appointment</a>
        <a href="login.php">Admin</a>
        <a href="testimoni.php">Testimonials</a>
    </nav>
</header>

<section class="booking-hero">
    <h2>Book Your Appointment 🐶</h2>
    <p>Quick & easy — we come to your home</p>
</section>

<section class="booking-container">

<form method="POST" action="proses.php" class="booking-form">

    <div class="form-group">
        <label>Your Name</label>
        <input type="text" name="nama" required>
    </div>

    <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="hp" required>
    </div>

    <div class="form-group">
        <label>Address</label>
        <textarea name="alamat" required></textarea>
    </div>

    <div class="form-group">
        <label>Select Service</label>
        <select name="layanan">
            <option>Basic Spa</option>
            <option>Premium Spa</option>
        </select>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="tanggal" required>
        </div>

        <div class="form-group">
            <label>Time</label>
            <input type="time" name="jam" required>
        </div>
    </div>

    <button type="submit" class="btn primary full">Confirm Booking</button>

</form>

</section>

</body>
</html>