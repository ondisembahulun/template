<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background-color: #007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .feature {
            padding: 40px 20px;
            text-align: center;
        }
        .feature h3 {
            margin-bottom: 20px;
        }
        .about {
            background-color: #f8f9fa;
            padding: 60px 20px;
            text-align: center;
        }
        .contact {
            padding: 60px 20px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">MyApp</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <h1>Welcome to MyApp</h1>
    <p>Build amazing things with our platform.</p>
    <a href="#features" class="btn btn-light mt-3">Explore Features</a>
</section>

<!-- Features Section -->
<section id="features" class="container mt-5">
    <div class="row">
        <div class="col-md-4 feature">
            <h3>Feature One</h3>
            <p>Deskripsi singkat tentang fitur pertama.</p>
        </div>
        <div class="col-md-4 feature">
            <h3>Feature Two</h3>
            <p>Deskripsi singkat tentang fitur kedua.</p>
        </div>
        <div class="col-md-4 feature">
            <h3>Feature Three</h3>
            <p>Deskripsi singkat tentang fitur ketiga.</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <h2>About Us</h2>
    <p>Kami menyediakan platform terbaik untuk mengembangkan ide Anda.</p>
</section>

<!-- Contact Section -->
<section id="contact" class="contact container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <form action="#" method="POST" class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
            <textarea name="message" class="form-control" placeholder="Your Message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 MyApp. All rights reserved.</p>
</footer>

</body>
</html>