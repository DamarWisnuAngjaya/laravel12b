@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO UTAMA -->
<section class="hero">

    <div class="hero-content">
        <span class="hero-badge">Platform desainer</span>
        <h1>
            Crea<span>ont</span>
        </h1>
        <p>
            Platform desain modern untuk kebutuhan digital Anda dengan kualitas profesional.
        </p>
        <a href="#" class="btn-start">Mulai Sekarang</a>

    </div>

</section>


<!-- KATEGORI -->
<section class="kategori">

    <div class="hero-center">

        <h2>
            Semua Kebutuhan <br>
            <span>Desain Ada di Sini</span>
        </h2>

        <p>
            Dari logo sederhana hingga sistem branding penuh — temukan spesialis yang tepat untuk proyekmu.
        </p>
    </div>

    <div class="category-grid">
        <div class="card">🎨<p>Desain Grafis</p></div>
        <div class="card">📱<p>UI/UX Design</p></div>
        <div class="card">✏️<p>Branding & Logo</p></div>
        <div class="card">🖼️<p>Ilustrasi</p></div>
        <div class="card">🎬<p>Motion Design</p></div>
        <div class="card">🌐<p>Web Design</p></div>
        <div class="card">📊<p>Infografis</p></div>
    </div>

</section>

<!-- HOW IT WORKS -->
<section class="steps">
    <div class="steps-header">
        <h2>Cara Kerja Creaont</h2>
        <p>Empat langkah mudah untuk mendapatkan desain impian Anda.</p>
    </div>

    <div class="steps-grid">
        <div class="step">
            <div class="circle">01</div>
            <h3>Posting Proyek</h3>
            <p>Jelaskan kebutuhan desain Anda — kategori, brief, budget, dan deadline.</p>
        </div>

        <div class="step">
            <div class="circle">02</div>
            <h3>Terima Penawaran</h3>
            <p>Desainer terbaik mengirim proposal dan portofolio mereka.</p>
        </div>

        <div class="step">
            <div class="circle">03</div>
            <h3>Pilih & Mulai</h3>
            <p>Pilih desainer yang cocok, bayar aman melalui escrow.</p>
        </div>

        <div class="step">
            <div class="circle">04</div>
            <h3>Terima Hasil</h3>
            <p>Revisi hingga puas, lalu approve dan download hasilnya.</p>
        </div>
    </div>
</section>

@endsection