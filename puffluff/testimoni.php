<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testimonials - Puffluff</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>🐾 Puffluff Dog Spa</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="layanan.php">Services</a>
        <a href="harga.php">Pricing</a>
        <a href="appointment.php">Appointment</a>
        <a href="testimoni.php">Testimonials</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<section class="testimonials">
    <h2>Happy Customers 🐶</h2>

    <div class="slider">

        <div class="slides">

            <div class="testi-card">
                <p>"My dog loves it! Super clean and professional."</p>
                <span>- Sarah</span>
            </div>

            <div class="testi-card">
                <p>"Very convenient, they come to my home!"</p>
                <span>- Amanda</span>
            </div>

            <div class="testi-card">
                <p>"Best grooming service ever 💖"</p>
                <span>- Bella</span>
            </div>

        </div>

    </div>

</section>
<script>
let index = 0;
const slides = document.querySelector(".slides");
const total = document.querySelectorAll(".testi-card").length;

function showSlide() {
    index++;
    if (index >= total) {
        index = 0;
    }
    slides.style.transform = `translateX(-${index * 100}%)`;
}

/* AUTO SLIDE */
setInterval(showSlide, 3000);
</body>
</html>