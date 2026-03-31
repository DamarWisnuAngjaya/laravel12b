<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur — DesignHub</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✦</text></svg>">
    <style>
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            max-width: 1000px;
            margin: 0 auto;
        }
        .pricing-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2.5rem 2rem;
            text-align: center;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        .pricing-card.popular {
            border-color: var(--accent);
            background: linear-gradient(135deg, rgba(200,255,62,0.05), var(--surface));
        }
        .popular-badge {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            background: var(--accent);
            color: var(--bg);
            font-size: 0.72rem;
            font-weight: 800;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .pricing-plan {
            font-family: var(--font-display);
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }
        .pricing-price {
            font-family: var(--font-display);
            font-size: 3rem;
            font-weight: 800;
            letter-spacing: -2px;
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        .pricing-price span { font-size: 1rem; letter-spacing: 0; font-weight: 400; color: var(--text-muted); }
        .pricing-period { font-size: 0.85rem; color: var(--text-muted); margin-bottom: 2rem; }
        .pricing-features {
            list-style: none;
            text-align: left;
            margin-bottom: 2rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .pricing-features li {
            font-size: 0.9rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }
        .pricing-features li::before {
            content: '✓';
            color: var(--accent);
            font-weight: 700;
            flex-shrink: 0;
        }
        .pricing-features li.disabled { color: var(--text-dim); opacity: 0.4; }
        .pricing-features li.disabled::before { content: '×'; color: var(--text-dim); }
        .btn-plan {
            display: block;
            width: 100%;
            padding: 0.85rem;
            border-radius: 50px;
            font-family: var(--font-display);
            font-weight: 700;
            font-size: 0.9rem;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            text-decoration: none;
        }
        .btn-plan-outline {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text);
        }
        .btn-plan-outline:hover {
            border-color: var(--text-muted);
            background: var(--surface2);
        }
        .btn-plan-fill {
            background: var(--accent);
            color: var(--bg);
        }
        .btn-plan-fill:hover {
            background: #d4ff5a;
            box-shadow: 0 10px 30px rgba(200,255,62,0.35);
            transform: translateY(-2px);
        }
        .compare-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .compare-table th, .compare-table td {
            padding: 1rem 1.5rem;
            text-align: center;
            border-bottom: 1px solid var(--border);
        }
        .compare-table th {
            font-family: var(--font-display);
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding-bottom: 1.5rem;
        }
        .compare-table th:first-child, .compare-table td:first-child { text-align: left; }
        .compare-table td { font-size: 0.9rem; color: var(--text-muted); }
        .compare-table td:first-child { font-weight: 500; color: var(--text); }
        .check { color: var(--accent); font-size: 1.1rem; }
        .cross { color: var(--border); font-size: 1.1rem; }
        .compare-table tr:hover td { background: rgba(255,255,255,0.02); }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-brand">Design<span>Hub</span></div>
    <div class="nav-links">
        <a href="home.html">Home</a>
        <a href="about.html">About</a>
        <a href="features.html" class="active">Fitur</a>
        <a href="contact.html">Kontak</a>
        <a href="#" class="nav-cta">Mulai Gratis</a>
    </div>
</nav>

<!-- HERO FITUR -->
<section style="padding: 150px 5% 80px; background: var(--bg); text-align: center; position: relative; overflow: hidden;">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 20%, rgba(124,58,237,0.12), transparent 70%);pointer-events:none;"></div>
    <span class="section-eyebrow">Fitur Platform</span>
    <h1 class="section-title" style="margin: 1rem 0;">Semua yang Anda<br><span style="color:var(--accent)">Butuhkan</span> di Satu Tempat</h1>
    <p class="section-desc">Kami membangun fitur berdasarkan masukan nyata dari desainer dan klien kami. Setiap detail dirancang untuk memperlancar kolaborasi kreatif.</p>
</section>

<!-- CORE FEATURES -->
<section class="section features-section">
    <div class="section-header">
        <span class="section-eyebrow">Fitur Utama</span>
        <h2 class="section-title fade-up">Teknologi yang<br>Mendukung Kreativitas</h2>
    </div>
    <div class="features-grid">
        <div class="feature-card fade-up">
            <div class="feature-icon">🤖</div>
            <div class="feature-title">AI Smart Matching</div>
            <p class="feature-desc">Algoritma cerdas menganalisis brief proyek Anda dan mencocokkan dengan portofolio, gaya, dan keahlian ratusan desainer dalam detik.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">🔐</div>
            <div class="feature-title">Escrow Payment</div>
            <p class="feature-desc">Dana ditahan aman hingga Anda puas dengan hasilnya. Tidak ada risiko — klien terlindungi dari penipuan, desainer terjamin pembayaran.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">💬</div>
            <div class="feature-title">Real-Time Collaboration</div>
            <p class="feature-desc">Ruang kerja terintegrasi dengan chat, board revisi, annotation langsung pada desain, dan notifikasi instan untuk semua perubahan.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">⭐</div>
            <div class="feature-title">Verified Portfolio</div>
            <p class="feature-desc">Setiap portofolio diverifikasi oleh tim kurator kami. Lihat karya asli, bukan sekadar mockup template, sebelum memilih desainer.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">📊</div>
            <div class="feature-title">Analytics Dashboard</div>
            <p class="feature-desc">Pantau progress proyek, riwayat pembayaran, dan performa desainer dengan dashboard yang mudah dibaca dan informatif.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">🔄</div>
            <div class="feature-title">Revisi Terstruktur</div>
            <p class="feature-desc">Sistem manajemen revisi yang jelas — tandai perubahan langsung pada file, track semua feedback, dan hindari miskomunikasi.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">📁</div>
            <div class="feature-title">File Management</div>
            <p class="feature-desc">Semua aset proyek tersimpan rapi di cloud. Unduh kapan saja, akses dari mana saja, dan simpan riwayat versi secara otomatis.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">🌐</div>
            <div class="feature-title">Multi-Language Support</div>
            <p class="feature-desc">Platform tersedia dalam Bahasa Indonesia dan Inggris. Desainer bisa berkomunikasi dengan klien internasional tanpa hambatan bahasa.</p>
        </div>
        <div class="feature-card fade-up">
            <div class="feature-icon">📱</div>
            <div class="feature-title">Mobile App</div>
            <p class="feature-desc">Kelola proyek dari genggaman. Approve revisi, balas pesan, dan terima notifikasi real-time dari aplikasi iOS dan Android.</p>
        </div>
    </div>
</section>

<!-- PRICING -->
<section class="section" style="background: var(--bg);">
    <div class="section-header">
        <span class="section-eyebrow">Harga</span>
        <h2 class="section-title fade-up">Mulai Gratis,<br>Bayar saat Sukses</h2>
        <p class="section-desc fade-up">Tidak ada biaya langganan. DesignHub hanya mengambil komisi kecil saat proyek berhasil diselesaikan.</p>
    </div>
    <div class="pricing-grid">
        <div class="pricing-card fade-up">
            <div class="pricing-plan">Starter</div>
            <div class="pricing-price">Gratis <span></span></div>
            <div class="pricing-period">Untuk memulai</div>
            <ul class="pricing-features">
                <li>3 proyek aktif</li>
                <li>Chat dengan desainer</li>
                <li>Escrow payment</li>
                <li>Revisi dasar</li>
                <li class="disabled">AI Matching prioritas</li>
                <li class="disabled">Analytics dashboard</li>
                <li class="disabled">Support 24/7</li>
            </ul>
            <a href="#" class="btn-plan btn-plan-outline">Mulai Gratis</a>
        </div>
        <div class="pricing-card popular fade-up">
            <div class="popular-badge">Terpopuler</div>
            <div class="pricing-plan">Pro</div>
            <div class="pricing-price">299<span>k/bln</span></div>
            <div class="pricing-period">Tagihan bulanan</div>
            <ul class="pricing-features">
                <li>Proyek tidak terbatas</li>
                <li>AI Matching prioritas</li>
                <li>Escrow & split payment</li>
                <li>Revisi tak terbatas</li>
                <li>Analytics dashboard</li>
                <li>Support 24/7</li>
                <li class="disabled">Brand kit storage</li>
            </ul>
            <a href="#" class="btn-plan btn-plan-fill">Coba 14 Hari Gratis</a>
        </div>
        <div class="pricing-card fade-up">
            <div class="pricing-plan">Enterprise</div>
            <div class="pricing-price" style="font-size: 1.8rem; letter-spacing: -1px;">Custom</div>
            <div class="pricing-period">Hubungi tim sales</div>
            <ul class="pricing-features">
                <li>Semua fitur Pro</li>
                <li>Dedicated account manager</li>
                <li>SLA & kontrak khusus</li>
                <li>Brand kit storage</li>
                <li>White-label option</li>
                <li>API integration</li>
                <li>Training tim</li>
            </ul>
            <a href="contact.html" class="btn-plan btn-plan-outline">Hubungi Sales</a>
        </div>
    </div>
</section>

<!-- COMPARISON TABLE -->
<section class="section" style="background: var(--bg2);">
    <div class="section-header">
        <span class="section-eyebrow">Perbandingan</span>
        <h2 class="section-title fade-up">DesignHub vs Alternatif Lain</h2>
    </div>
    <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); overflow: hidden; max-width: 900px; margin: 0 auto;" class="fade-up">
        <table class="compare-table">
            <thead>
                <tr>
                    <th>Fitur</th>
                    <th style="color: var(--accent)">DesignHub</th>
                    <th>Platform Lain</th>
                    <th>Freelancer Langsung</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Desainer Terverifikasi</td>
                    <td><span class="check">✓</span></td>
                    <td><span class="check">✓</span></td>
                    <td><span class="cross">×</span></td>
                </tr>
                <tr>
                    <td>AI Smart Matching</td>
                    <td><span class="check">✓</span></td>
                    <td><span class="cross">×</span></td>
                    <td><span class="cross">×</span></td>
                </tr>
                <tr>
                    <td>Escrow Payment</td>
                    <td><span class="check">✓</span></td>
                    <td><span class="check">✓</span></td>
                    <td><span class="cross">×</span></td>
                </tr>
                <tr>
                    <td>Khusus Desain</td>
                    <td><span class="check">✓</span></td>
                    <td><span class="cross">×</span></td>
                    <td><span class="cross">×</span></td>
                </tr>
                <tr>
                    <td>Revisi Terstruktur</td>
                    <td><span class="check">✓</span></td>
                    <td>Terbatas</td>
                    <td><span class="cross">×</span></td>
                </tr>
                <tr>
                    <td>Support Bahasa Indonesia</td>
                    <td><span class="check">✓</span></td>
                    <td><span class="cross">×</span></td>
                    <td>Tergantung</td>
                </tr>
                <tr>
                    <td>Komisi Platform</td>
                    <td style="color: var(--accent); font-weight: 700;">10%</td>
                    <td>20–40%</td>
                    <td>0% (risiko tinggi)</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <span class="section-eyebrow">Mulai Sekarang</span>
    <h2 class="section-title fade-up">Sudah Yakin?<br>Daftar Gratis!</h2>
    <p class="section-desc fade-up">Tidak perlu kartu kredit. Mulai posting proyek pertama Anda dalam 5 menit.</p>
    <div class="cta-actions">
        <a href="#" class="btn-primary">✦ Buat Akun Gratis</a>
        <a href="contact.html" class="btn-secondary">Hubungi Kami →</a>
    </div>
</section>

<script>
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) setTimeout(() => entry.target.classList.add('visible'), i * 80);
    });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
</body>
</html>