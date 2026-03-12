<!DOCTYPE html>
<html>
<head>
    <title>Home - Profile</title>
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
                <p class="label">N A M A &nbsp; S A Y A</p>
                <h1>Damar Wisnu <span class="red">Angjaya</span></h1>
                <p>- Sedang belajar laravel</p>
                <p>- Tempat lahir di Lamongan</p>
                <p>- Tanggal lahir 11/09/2006</p>
            </div>
            <div class="card-right">
                <img src="{{ asset('images/Albedo.png') }}" alt="Foto Profil">
            </div>
        </div>
    </div>
</body>
</html>