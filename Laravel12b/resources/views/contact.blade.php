<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <video class="video-bg" autoplay muted loop playsinline>
        <source src="{{ asset('images/bg.mp4') }}" type="video/mp4">
    </video>
    <nav class="navbar">
        <div class="nav-brand">DWA</div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    <div class="hero">
        <div class="card">
            <div class="card-left">
                <p class="label">K O N T A K</p>
                <h1>Contact <span class="red">Me</span></h1>
                <div class="contact-item"><span>Email</span> damarwisnu110906@email.com</div>
                <div class="contact-item"><span>Whatsapp</span> 088741058602</div>
                <div class="contact-item"><span>Github</span> https://github.com/DamarWisnuAngjaya</div>
            </div>
            <div class="card-right">
                <img src="{{ asset('images/about.jpg') }}" alt="Foto Profil">
            </div>
        </div>
    </div>
</body>
</html>