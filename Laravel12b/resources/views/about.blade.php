<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
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
                <p class="label">P R O F I L</p>
                <h1>About <span class="red">Me</span></h1>
                <ul>
                    <li>Nama : Damar Wisnu Angjaya</li>
                    <li>Skill : Editing, Design</li>
                    <li>Hobi : Gaming</li>
                </ul>
            </div>
            <div class="card-right">
                <img src="{{ asset('images/pp.jpg') }}" alt="Foto Profil">
            </div>
        </div>
    </div>
</body>
</html>