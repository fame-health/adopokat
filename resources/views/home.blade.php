<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan - Advokat Terpercaya Pekanbaru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Meta Tags -->
    <meta name="description" content="Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan - Advokat dan Konsultan Hukum Profesional di Pekanbaru. Layanan Hukum Pidana, Perdata, Bisnis, Properti, dan Keluarga. Konsultasi Hukum Gratis.">
    <meta name="keywords" content="advokat pekanbaru, pengacara riau, hukum pekanbaru, konsultan hukum, lawyer riau, kuasa hukum, bantuan hukum, pengacara pidana, hukum perdata, sengketa tanah, hukum keluarga, firma hukum pekanbaru, dr parlindungan">
    <meta name="author" content="DR. Parlindungan, SH. MH. CLA., Advokat">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="general">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://advokatparlindungan.com">
    <meta property="og:title" content="Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan - Advokat Terpercaya Pekanbaru">
    <meta property="og:description" content="Layanan hukum profesional di Pekanbaru dan Riau. Advokat berpengalaman menangani kasus pidana, perdata, bisnis, properti, dan hukum keluarga.">
    <meta property="og:image" content="{{ asset('img/image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Kantor Hukum DR. Parlindungan & Rekan">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@parlindungan_riau">
    <meta name="twitter:creator" content="@parlindungan_riau">
    <meta name="twitter:title" content="Kantor Hukum DR. Parlindungan - Advokat Pekanbaru">
    <meta name="twitter:description" content="Solusi hukum terpercaya untuk individu dan bisnis di Pekanbaru. Konsultasi hukum gratis via WhatsApp.">
    <meta name="twitter:image" content="{{ asset('img/image.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://advokatparlindungan.com">

    <!-- Additional Meta Tags -->
    <meta name="geo.region" content="ID-RI">
    <meta name="geo.placename" content="Pekanbaru">
    <meta name="geo.position" content="0.5065616;101.3756855">
    <meta name="ICBM" content="0.5065616, 101.3756855">
    <meta name="distribution" content="global">
    <meta name="target" content="all">
    <meta name="apple-mobile-web-app-title" content="DR. Parlindungan Law Firm">
    <meta name="application-name" content="Kantor Hukum Parlindungan">
    <meta name="msapplication-TileColor" content="#1e3a8a">
    <meta name="theme-color" content="#1e3a8a">

    <!-- Viewport tambahan untuk mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="format-detection" content="telephone=yes">

    <!-- Dublin Core Metadata -->
    <meta name="DC.title" content="Kantor Hukum DR. Parlindungan - Advokat Pekanbaru">
    <meta name="DC.creator" content="DR. Parlindungan, SH. MH. CLA.">
    <meta name="DC.subject" content="Hukum, Advokat, Pengacara, Konsultan Hukum">
    <meta name="DC.description" content="Layanan hukum profesional di Pekanbaru">
    <meta name="DC.publisher" content="Kantor Hukum DR. Parlindungan & Rekan">
    <meta name="DC.date" content="2026-01-11">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e3a8a',
                        'primary-light': '#3b82f6',
                        'primary-dark': '#1e40af',
                        accent: '#f87171',
                        'accent-light': '#fca5a5',
                        'accent-dark': '#b45353'
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-accent {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        }

        .gradient-dark {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .shine-effect:hover::before {
            left: 100%;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 overflow-x-hidden">
    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-md shadow-lg fixed w-full top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-3">
                <div class="flex items-center space-x-4 group">
                    <div class="rounded-lg p-2 shadow-lg group-hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('img/image.png') }}" alt="I.CO Logo" class="w-10 h-10 object-contain">
                    </div>
                    <div>
                        <span class="text-xl font-bold text-primary">KANTOR HUKUM</span>
                        <div class="text-xs text-gray-600 -mt-1 font-semibold">DR. Parlindungan, SH. MH. CLA. & Rekan</div>
                    </div>
                </div>

                <div class="hidden lg:flex items-center space-x-6">
                    <a href="/" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative group">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
                    <a href="layanan-unggulan" class="text-gray-700 text-sm hover:text-accent transition-colors relative group">
                        Layanan
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="tentang-kami" class="text-gray-700 text-sm hover:text-accent transition-colors relative group">
                        Tentang
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="hubungi-kami" class="text-gray-700 text-sm hover:text-accent transition-colors relative group">
                        Kontak
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="https://wa.me/6281268123180" target="_blank" class="gradient-accent text-white text-sm font-bold px-5 py-2 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fab fa-whatsapp mr-1.5"></i>
                        Konsultasi Gratis
                    </a>
                </div>

                <button id="mobile-menu-btn" class="lg:hidden text-primary focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <div id="mobile-menu" class="hidden lg:hidden pb-4 space-y-1">
                <a href="/" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Beranda</a>
                <a href="layanan-unggulan" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Layanan</a>
                <a href="tentang-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Tentang</a>
                <a href="hubungi-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Kontak</a>
                <a href="https://wa.me/6281268123180" target="_blank" class="block w-full gradient-accent text-sm text-white font-bold py-2 px-3 rounded-lg mt-2 text-center">
                    <i class="fab fa-whatsapp mr-1.5"></i>
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-16 gradient-dark text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-48 h-48 bg-accent rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-accent rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-5">
                    <div class="inline-block">
                        <span class="bg-accent/20 text-accent px-3 py-1.5 rounded-full text-xs font-semibold backdrop-blur-sm border border-accent/30">
                            ⭐ Advokat Berpengalaman & Terpercaya
                        </span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-bold leading-tight">
                        Solusi <span class="gradient-accent bg-clip-text text-transparent">Hukum Terbaik</span> untuk Anda
                    </h1>
                    <p class="text-base text-gray-300 leading-relaxed">
                        Kami memberikan layanan hukum profesional dengan pendekatan yang personal.
                        Setiap kasus ditangani dengan fokus pada hasil terbaik untuk klien.
                        Komitmen kami adalah memberikan solusi hukum yang efektif, terpercaya, dan sesuai kebutuhan Anda.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://wa.me/6281268123180" target="_blank" class="gradient-accent shine-effect text-white text-sm font-bold px-6 py-3 rounded-xl shadow-2xl hover:shadow-accent/50 transform hover:scale-105 transition-all duration-300">
                            <i class="fab fa-whatsapp mr-1.5"></i>
                            Hubungi Kami
                        </a>
                        <a href="#layanan" class="glass-effect text-white text-sm font-bold px-6 py-3 rounded-xl hover:bg-white/20 transition-all duration-300">
                            <i class="fas fa-gavel mr-1.5"></i>
                            Lihat Layanan
                        </a>
                    </div>
                    <div class="grid grid-cols-3 gap-5 pt-4">
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-accent bg-clip-text text-transparent">10+</div>
                            <div class="text-xs text-gray-400 mt-0.5">Tahun Pengalaman</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-accent bg-clip-text text-transparent">500+</div>
                            <div class="text-xs text-gray-400 mt-0.5">Kasus Ditangani</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-accent bg-clip-text text-transparent">98%</div>
                            <div class="text-xs text-gray-400 mt-0.5">Tingkat Keberhasilan</div>
                        </div>
                    </div>
                </div>
                <div class="relative floating max-w-sm mx-auto">
                    <div class="glass-effect rounded-2xl p-6 shadow-2xl">
                        <div class="bg-white rounded-2xl p-8 text-center shadow-2xl">
                            <i class="fas fa-balance-scale text-8xl text-primary mb-4"></i>
                            <h3 class="text-2xl font-bold text-primary mb-2">Keadilan & Profesionalisme</h3>
                            <p class="text-gray-600 text-sm">Membela hak Anda dengan integritas tinggi</p>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -left-6 gradient-accent p-5 rounded-2xl shadow-2xl hover:scale-105 transition-transform duration-300">
                        <div class="text-xs font-semibold text-white">Konsultasi Pertama</div>
                        <div class="text-2xl font-bold text-white mt-0.5">GRATIS</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 h-12 -mb-6 rounded-t-[40px]"></div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <span class="text-accent font-semibold text-xs uppercase tracking-wider">Tentang Kami</span>
                    <h2 class="text-3xl font-bold text-primary mb-4 mt-1">
                        Advokat <span class="gradient-accent bg-clip-text text-transparent">Profesional & Berpengalaman</span>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan adalah firma hukum yang berlokasi di Pekanbaru, Riau. Kami memiliki komitmen tinggi dalam memberikan layanan hukum terbaik dengan pendekatan profesional dan berintegritas.
                    </p>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        Dipimpin oleh DR. Parlindungan, SH. MH. CLA., seorang Advokat berpengalaman, dosen di sejumlah perguruan tinggi di Riau, dan mantan wartawan ini, dengan berlatar pendidikan hukum yang solid, kami siap membantu menyelesaikan berbagai permasalahan hukum Anda dengan solusi yang tepat dan efektif.
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-white p-4 rounded-xl hover-lift border border-primary/10 shadow-sm">
                            <div class="bg-primary text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-certificate text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Tersertifikasi</h4>
                            <p class="text-xs text-gray-600">Advokat berlisensi resmi dengan pengalaman puluhan tahun</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl hover-lift border border-accent/10 shadow-sm">
                            <div class="gradient-accent text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-user-shield text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Terpercaya</h4>
                            <p class="text-xs text-gray-600">Ratusan klien telah mempercayakan kasus mereka</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl hover-lift border border-accent/10 shadow-sm">
                            <div class="gradient-accent text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Responsif</h4>
                            <p class="text-xs text-gray-600">Siap memberikan konsultasi cepat dan tanggap</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl hover-lift border border-primary/10 shadow-sm">
                            <div class="bg-primary text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-award text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Profesional</h4>
                            <p class="text-xs text-gray-600">Menangani kasus dengan dedikasi tinggi</p>
                        </div>
                    </div>
                </div>

                <div class="relative order-1 lg:order-2">
                    <div class="absolute -inset-4 gradient-accent opacity-20 blur-3xl rounded-full"></div>

                    <div class="relative z-10">
                        <img
                            src="{{ asset('img/gambar.png') }}"
                            alt="DR. Parlindungan"
                            class="w-full max-w-md mx-auto rounded-2xl shadow-2xl hover:scale-[1.02] transition-transform duration-500"
                        >
                    </div>

                    <div class="absolute -bottom-8 -left-8 gradient-dark text-white p-6 rounded-2xl shadow-2xl z-20 hover:scale-105 transition-transform duration-300">
                        <div class="text-base mt-1">DR. PARLINDUNGAN, SH. MH. </div>
                        <div class="text-xs text-gray-400 mt-0.5">Kantor Hukum Dr. Parlindungan, SH. MH. & Rekan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-xs uppercase tracking-wider">Layanan Kami</span>
                <h2 class="text-3xl font-bold text-primary mb-4 mt-1">
                    Bidang <span class="gradient-accent bg-clip-text text-transparent">Keahlian Hukum</span>
                </h2>
                <p class="text-gray-600 text-sm max-w-2xl mx-auto">
                    Kami menyediakan berbagai layanan hukum untuk memenuhi kebutuhan Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-4 rounded-lg inline-block mb-4">
                        <i class="fas fa-gavel text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Hukum Pidana</h4>
                    <p class="text-sm text-gray-600">Pendampingan dan pembelaan dalam perkara pidana dari tingkat penyidikan hingga kasasi</p>
                </div>

                <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-4 rounded-lg inline-block mb-4">
                        <i class="fas fa-handshake text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Hukum Perdata</h4>
                    <p class="text-sm text-gray-600">Penyelesaian sengketa perdata, kontrak, wanprestasi, dan perbuatan melawan hukum</p>
                </div>

                <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-4 rounded-lg inline-block mb-4">
                        <i class="fas fa-building text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Hukum Bisnis</h4>
                    <p class="text-sm text-gray-600">Konsultasi hukum perusahaan, kontrak bisnis, dan perizinan usaha</p>
                </div>

                <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-4 rounded-lg inline-block mb-4">
                        <i class="fas fa-home text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Hukum Properti</h4>
                    <p class="text-sm text-gray-600">Pengurusan sertifikat, sengketa tanah, dan transaksi properti</p>
                </div>

                <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-4 rounded-lg inline-block mb-4">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Hukum Keluarga</h4>
                    <p class="text-sm text-gray-600">Perceraian, hak asuh anak, pembagian harta, dan waris</p>
                </div>

                <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-4 rounded-lg inline-block mb-4">
                        <i class="fas fa-briefcase text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Hukum Ketenagakerjaan</h4>
                    <p class="text-sm text-gray-600">PHK, perselisihan hubungan industrial, dan perjanjian kerja</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer id="kontak" class="gradient-dark text-white pt-16 pb-8 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-20 w-64 h-64 bg-accent rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-20 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-4 gap-12">
                <!-- Brand & Deskripsi -->
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="gradient-accent text-white rounded-lg p-2 shadow-lg">
                            <div class="rounded-lg p-0 shadow-lg group-hover:scale-105 transition-transform duration-300">
                                <img src="{{ asset('img/image.png') }}" alt="I.CO Logo" class="w-8 h-8 object-contain">
                            </div>
                            <div></div>
                        </div>
                        <div>
                            <span class="text-lg font-bold">KANTOR HUKUM</span>
                            <div class="text-xs text-gray-300 -mt-1">DR. Parlindungan & Rekan</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm mb-6">
                        Solusi hukum terpercaya untuk individu, keluarga, dan perusahaan di Pekanbaru dan sekitarnya.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/6281268123180" target="_blank" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/parlindungan.riau/" target="_blank" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://www.tiktok.com/@advokat_parlindungan" target="_blank" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Menu Utama</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="#home" class="hover:text-accent transition">Beranda</a></li>
                        <li><a href="#layanan" class="hover:text-accent transition">Layanan</a></li>
                        <li><a href="#tentang" class="hover:text-accent transition">Tentang Kami</a></li>
                        <li><a href="#kontak" class="hover:text-accent transition">Kontak</a></li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Layanan Hukum</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li>Hukum Pidana</li>
                        <li>Hukum Perdata</li>
                        <li>Hukum Bisnis</li>
                        <li>Hukum Properti</li>
                        <li>Hukum Keluarga</li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-accent mt-1 mr-3"></i>
                            Jl. Meranti, No. 46, Kelurahan Labuh Baru Timur, Kecamatan Payung Sekaki, Kota Pekanbaru, Provinsi Riau
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-accent mr-3"></i>
                            0812-6812-3180
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-accent mr-3"></i>
                            pengacaraparlindungan@gmail.com
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-500 text-sm">
                © 2026 Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // ==================
            // 1. Mobile Menu Toggle
            // ==================
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');

                    // Toggle icon hamburger ↔ times
                    const icon = mobileBtn.querySelector('i');
                    if (icon.classList.contains('fa-bars')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });

                // Auto close menu ketika link diklik (mobile)
                const mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        // Reset icon ke hamburger
                        const icon = mobileBtn.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    });
                });
            }

            // ==================
            // 2. Smooth Scroll dengan offset navbar
            // ==================
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (!targetId || targetId === '#') return;

                    const target = document.querySelector(targetId);
                    if (!target) return;

                    // Sesuaikan nilai ini dengan tinggi navbar Anda (termasuk shadow/margin)
                    const navbarOffset = 90; // ±90px biasanya cukup untuk navbar fixed + shadow

                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - navbarOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                });
            });

            // ==================
            // 3. Optional: Tutup mobile menu saat klik di luar area menu (extra UX)
            // ==================
            document.addEventListener('click', (e) => {
                if (!mobileMenu || !mobileBtn) return;

                const isClickInsideMenu = mobileMenu.contains(e.target);
                const isClickOnButton = mobileBtn.contains(e.target);

                if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    const icon = mobileBtn.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    </script>
</body>
</html>
