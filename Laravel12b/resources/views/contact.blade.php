<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak — DesignHub</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✦</text></svg>">
    <style>
        .success-toast {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--surface);
            border: 1px solid var(--accent);
            border-radius: var(--radius-sm);
            padding: 1rem 1.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            z-index: 9999;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
        .success-toast.show {
            transform: translateY(0);
            opacity: 1;
        }
        .faq-item {
            border-bottom: 1px solid var(--border);
        }
        .faq-question {
            width: 100%;
            background: none;
            border: none;
            text-align: left;
            padding: 1.5rem 0;
            font-family: var(--font-body);
            font-size: 1rem;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }
        .faq-icon {
            font-size: 1.5rem;
            color: var(--text-muted);
            transition: var(--transition);
            flex-shrink: 0;
            line-height: 1;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.3s ease;
        }
        .faq-answer p {
            padding-bottom: 1.5rem;
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.8;
            font-weight: 300;
        }
        .faq-item.open .faq-icon { transform: rotate(45deg); color: var(--accent); }
        .faq-item.open .faq-answer { max-height: 300px; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-brand">Design<span>Hub</span></div>
    <div class="nav-links">
        <a href="home">Home</a>
        <a href="about">About</a>
        <a href="features">Fitur</a>
        <a href="contact" class="active">Kontak</a>
        <a href="#" class="nav-cta">Mulai Gratis</a>
    </div>
</nav>

<!-- CONTACT SECTION -->
<section class="contact-section">
    <div class="contact-info">
        <span class="section-eyebrow" style="display:block; margin-bottom:1rem;">Hubungi Kami</span>
        <h1>Ada yang Bisa<br>Kami <span style="color:var(--accent)">Bantu</span>?</h1>
        <p>Tim kami siap menjawab pertanyaan Anda seputar platform, proyek, atau kolaborasi bisnis. Respons rata-rata dalam 24 jam.</p>

        <div class="contact-items">
            <div class="contact-item">
                <div class="contact-item-icon">📧</div>
                <div>
                    <div class="contact-item-title">Email</div>
                    <div class="contact-item-val">hello@designhub.id</div>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon">📞</div>
                <div>
                    <div class="contact-item-title">Telepon & WhatsApp</div>
                    <div class="contact-item-val">+62 21 1234 5678</div>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon">📍</div>
                <div>
                    <div class="contact-item-title">Kantor</div>
                    <div class="contact-item-val">Jl. Sudirman No. 77, Jakarta Selatan 12930</div>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon">🕐</div>
                <div>
                    <div class="contact-item-title">Jam Operasional</div>
                    <div class="contact-item-val">Senin–Jumat, 09.00–18.00 WIB</div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-card fade-up">
        <div style="margin-bottom: 2rem;">
            <h3 style="font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; letter-spacing: -0.5px; margin-bottom: 0.4rem;">Kirim Pesan</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem;">Isi form di bawah dan tim kami akan segera merespons.</p>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="John Doe" id="name">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="john@email.com" id="email">
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Topik</label>
            <select class="form-control form-select" id="topic">
                <option value="">Pilih topik...</option>
                <option>Pertanyaan tentang Platform</option>
                <option>Masalah Pembayaran</option>
                <option>Keluhan / Dispute</option>
                <option>Kemitraan Bisnis</option>
                <option>Melamar sebagai Desainer</option>
                <option>Media & Press</option>
                <option>Lainnya</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">Nama Perusahaan (opsional)</label>
            <input type="text" class="form-control" placeholder="PT. Contoh Bisnis">
        </div>

        <div class="form-group">
            <label class="form-label">Pesan</label>
            <textarea class="form-control" id="message" placeholder="Ceritakan kebutuhan atau pertanyaan Anda di sini..."></textarea>
        </div>

        <button class="btn-submit" onclick="submitForm()">✦ Kirim Pesan</button>
    </div>
</section>

<!-- FAQ -->
<section class="section" style="background: var(--bg2);">
    <div class="section-header">
        <span class="section-eyebrow">FAQ</span>
        <h2 class="section-title fade-up">Pertanyaan yang<br>Sering Ditanyakan</h2>
    </div>
    <div style="max-width: 700px; margin: 0 auto; background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); padding: 0 2rem;" class="fade-up">
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Bagaimana cara mendaftar sebagai desainer?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                <p>Daftar gratis melalui tombol "Mulai Gratis". Lengkapi profil, upload portofolio minimum 5 karya, dan ikuti proses verifikasi singkat dari tim DesignHub. Proses review biasanya memakan 2–3 hari kerja.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Berapa komisi yang diambil DesignHub?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                <p>DesignHub mengambil komisi sebesar 10% dari nilai proyek yang berhasil diselesaikan. Ini sudah mencakup biaya payment gateway, perlindungan escrow, dan akses penuh ke platform.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Apa yang terjadi jika saya tidak puas dengan hasil desain?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                <p>Semua paket mencakup jaminan revisi. Jika setelah revisi Anda masih tidak puas, tim Dispute Resolution DesignHub akan mediasi secara adil. Dana escrow baru dicairkan setelah Anda menyetujui hasil akhir.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Metode pembayaran apa yang diterima?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                <p>Kami menerima transfer bank (semua bank besar Indonesia), kartu kredit/debit (Visa, Mastercard), GoPay, OVO, Dana, QRIS, dan virtual account. Dana escrow akan dicairkan ke rekening desainer dalam 1–3 hari kerja setelah approve.</p>
            </div>
        </div>
        <div class="faq-item" style="border-bottom: none;">
            <button class="faq-question" onclick="toggleFaq(this)">
                Apakah ada kontrak atau dokumen legal yang diberikan?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                <p>Ya. Setiap proyek di DesignHub dilindungi oleh Service Agreement otomatis yang mengatur hak cipta, deliverables, dan timeline. Untuk proyek Enterprise, tersedia kontrak custom sesuai kebutuhan bisnis Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Toast -->
<div class="success-toast" id="toast">
    ✅ Pesan berhasil dikirim! Kami akan merespons dalam 24 jam.
</div>

<script>
function submitForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    if (!name || !email || !message) {
        alert('Mohon lengkapi nama, email, dan pesan Anda.');
        return;
    }
    const toast = document.getElementById('toast');
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 4000);
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('message').value = '';
    document.getElementById('topic').value = '';
}

function toggleFaq(btn) {
    const item = btn.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) setTimeout(() => entry.target.classList.add('visible'), i * 80);
    });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
</body>
</html>