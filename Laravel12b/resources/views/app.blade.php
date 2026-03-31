<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{TITLE}} — DesignHub</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✦</text></svg>">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-brand">Design<span>Hub</span></div>
    <div class="nav-links">
        <a href="home" class="{{HOME_ACTIVE}}">Home</a>
        <a href="about" class="{{ABOUT_ACTIVE}}">About</a>
        <a href="features" class="{{FEATURES_ACTIVE}}">Fitur</a>
        <a href="contact" class="{{CONTACT_ACTIVE}}">Kontak</a>
        <a href="#" class="nav-cta">Mulai Gratis</a>
    </div>
</nav>

<!-- CONTENT -->
{{CONTENT}}

<!-- FOOTER -->
<footer>
    <div class="footer-grid">
        <div>
            <div class="footer-brand-name">Design<span>Hub</span></div>
            <p class="footer-brand-desc">Platform marketplace desain terpercaya di Indonesia. Temukan desainer berbakat atau tawarkan jasa kreatifmu.</p>
            <div class="footer-socials">
                <div class="social-btn">𝕏</div>
                <div class="social-btn">in</div>
                <div class="social-btn">ig</div>
                <div class="social-btn">yt</div>
            </div>
        </div>
        <div>
            <div class="footer-col-title">Platform</div>
            <ul class="footer-links">
                <li><a href="#">Cari Desainer</a></li>
                <li><a href="#">Posting Proyek</a></li>
                <li><a href="#">Kategori</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Harga</a></li>
            </ul>
        </div>
        <div>
            <div class="footer-col-title">Dukungan</div>
            <ul class="footer-links">
                <li><a href="#">Pusat Bantuan</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Syarat & Ketentuan</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Status</a></li>
            </ul>
        </div>
        <div>
            <div class="footer-col-title">Perusahaan</div>
            <ul class="footer-links">
                <li><a href="about.html">Tentang Kami</a></li>
                <li><a href="#">Karir</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="contact.html">Kontak</a></li>
                <li><a href="#">Mitra</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="footer-copy">© 2026 <a href="#">DesignHub</a>. Dibuat dengan ♥ di Indonesia.</p>
        <p class="footer-copy">Semua hak dilindungi.</p>
    </div>
</footer>

<script>
// Intersection Observer for fade-up animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
            setTimeout(() => entry.target.classList.add('visible'), i * 80);
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>

</body>
</html>