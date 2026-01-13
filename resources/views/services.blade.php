<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Hukum - Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Meta Tags yang Diperbarui (letakkan dalam <head> setelah title) -->
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

<!-- Structured Data / Schema.org -->


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

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        .service-card {
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .service-card:hover::before {
            left: 100%;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-md shadow-lg fixed w-full top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-3">
                <div class="flex items-center space-x-4 group">
                    <div class="gradient-accent text-white rounded-lg p-2 shadow-lg">
                        <i class="fas fa-balance-scale text-xl"></i>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-primary">KANTOR HUKUM</span>
                        <div class="text-xs text-gray-600 -mt-1 font-semibold">DR. Parlindungan, SH. MH. CLA. & Rekan</div>
                    </div>
                </div>

                <div class="hidden lg:flex items-center space-x-6">
                    <a href="/" class="text-gray-700 text-sm hover:text-accent transition-colors">Beranda</a>
                    <a href="layanan-unggulan" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative">
                        Layanan
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
                    <a href="tentang-kami" class="text-gray-700 text-sm hover:text-accent transition-colors">Tentang</a>
                    <a href="hubungi-kami" class="text-gray-700 text-sm hover:text-accent transition-colors">Kontak</a>
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
                <a href="/" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Beranda</a>
                <a href="layanan-unggulan" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Layanan</a>
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
    <section class="pt-32 pb-16 gradient-dark text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-48 h-48 bg-accent rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-accent rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-block mb-4">
                <span class="bg-accent/20 text-accent px-4 py-2 rounded-full text-sm font-semibold backdrop-blur-sm border border-accent/30">
                    <i class="fas fa-briefcase mr-2"></i>Layanan Kami
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                Layanan Hukum <span class="gradient-accent bg-clip-text text-transparent">Profesional</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Solusi hukum komprehensif untuk setiap kebutuhan Anda dengan pendekatan yang personal dan hasil yang optimal
            </p>
        </div>

    </section>

    <!-- Main Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Bidang Keahlian</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Layanan Hukum Lengkap
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Hukum Pidana -->
                <div class="service-card bg-gradient-to-br from-primary/5 to-primary/10 p-8 rounded-2xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-gavel text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Hukum Pidana</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Pendampingan dan pembelaan dalam perkara pidana dari tingkat penyidikan hingga kasasi dengan strategi hukum yang tepat.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Pendampingan Penyidikan & Pemeriksaan</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Pembelaan di Pengadilan Negeri</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Banding & Kasasi</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Peninjauan Kembali (PK)</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6281268123180" class="block w-full bg-primary text-white text-center py-3 rounded-xl font-semibold hover:bg-primary-dark transition">
                        Konsultasi Sekarang
                    </a>
                </div>

                <!-- Hukum Perdata -->
                <div class="service-card bg-gradient-to-br from-accent/5 to-accent/10 p-8 rounded-2xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-handshake text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Hukum Perdata</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Penyelesaian sengketa perdata, kontrak, wanprestasi, dan perbuatan melawan hukum dengan pendekatan menang-menang.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Sengketa Kontrak & Wanprestasi</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Perbuatan Melawan Hukum</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Gugatan Ganti Rugi</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Mediasi & Negosiasi</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6281268123180" class="block w-full gradient-accent text-white text-center py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        Konsultasi Sekarang
                    </a>
                </div>

                <!-- Hukum Bisnis -->
                <div class="service-card bg-gradient-to-br from-primary/5 to-primary/10 p-8 rounded-2xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-building text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Hukum Bisnis</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Konsultasi hukum perusahaan, kontrak bisnis, dan perizinan usaha untuk memastikan bisnis Anda berjalan lancar.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Pendirian & Legalitas Perusahaan</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Perjanjian & Kontrak Bisnis</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Perizinan Usaha</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Merger & Akuisisi</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6281268123180" class="block w-full bg-primary text-white text-center py-3 rounded-xl font-semibold hover:bg-primary-dark transition">
                        Konsultasi Sekarang
                    </a>
                </div>

                <!-- Hukum Properti -->
                <div class="service-card bg-gradient-to-br from-accent/5 to-accent/10 p-8 rounded-2xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-home text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Hukum Properti</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Pengurusan sertifikat, sengketa tanah, dan transaksi properti untuk melindungi investasi properti Anda.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Pengurusan Sertifikat Tanah</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Sengketa Tanah & Bangunan</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Jual Beli Properti</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Sewa Menyewa & Kontrak</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6281268123180" class="block w-full gradient-accent text-white text-center py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        Konsultasi Sekarang
                    </a>
                </div>

                <!-- Hukum Keluarga -->
                <div class="service-card bg-gradient-to-br from-primary/5 to-primary/10 p-8 rounded-2xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-users text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Hukum Keluarga</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Perceraian, hak asuh anak, pembagian harta, dan waris dengan pendekatan yang sensitif dan profesional.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Perceraian & Cerai Gugat</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Hak Asuh Anak</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Pembagian Harta Gono-Gini</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Sengketa Waris</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6281268123180" class="block w-full bg-primary text-white text-center py-3 rounded-xl font-semibold hover:bg-primary-dark transition">
                        Konsultasi Sekarang
                    </a>
                </div>

                <!-- Hukum Ketenagakerjaan -->
                <div class="service-card bg-gradient-to-br from-accent/5 to-accent/10 p-8 rounded-2xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-briefcase text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Hukum Ketenagakerjaan</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">PHK, perselisihan hubungan industrial, dan perjanjian kerja untuk melindungi hak pekerja dan pengusaha.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Penyelesaian PHK</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Perselisihan Hubungan Industrial</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Perjanjian Kerja (PKWT/PKWTT)</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Tuntutan Hak Pekerja</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6281268123180" class="block w-full gradient-accent text-white text-center py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Cara Kerja</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Proses Konsultasi Hukum
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-primary/10 text-primary p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-phone-alt text-4xl"></i>
                        </div>
                        <div class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">1</div>
                        <h4 class="font-bold text-primary text-lg">Hubungi Kami</h4>
                    </div>
                    <p class="text-sm text-gray-600">Hubungi via WhatsApp atau telepon untuk konsultasi awal</p>
                </div>

                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-accent/10 text-accent p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-comments text-4xl"></i>
                        </div>
                        <div class="gradient-accent text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">2</div>
                        <h4 class="font-bold text-primary text-lg">Konsultasi</h4>
                    </div>
                    <p class="text-sm text-gray-600">Diskusikan masalah hukum Anda dengan advokat berpengalaman</p>
                </div>

                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-primary/10 text-primary p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-file-signature text-4xl"></i>
                        </div>
                        <div class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">3</div>
                        <h4 class="font-bold text-primary text-lg">Kesepakatan</h4>
                    </div>
                    <p class="text-sm text-gray-600">Setujui strategi hukum dan biaya yang transparan</p>
                </div>

                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-accent/10 text-accent p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-balance-scale text-4xl"></i>
                        </div>
                        <div class="gradient-accent text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">4</div>
                        <h4 class="font-bold text-primary text-lg">Penanganan</h4>
                    </div>
                    <p class="text-sm text-gray-600">Kami tangani kasus Anda hingga selesai dengan optimal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Keunggulan Kami</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Mengapa Memilih Layanan Kami?
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl hover-lift border-l-4 border-primary">
                    <div class="bg-primary/10 text-primary p-4 rounded-xl inline-block mb-6">
                        <i class="fas fa-user-tie text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Advokat Berpengalaman</h4>
                    <p class="text-gray-600 leading-relaxed">Tim advokat dengan pengalaman 10+ tahun menangani berbagai jenis kasus dengan tingkat keberhasilan tinggi.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl hover-lift border-l-4 border-accent">
                    <div class="bg-accent/10 text-accent p-4 rounded-xl inline-block mb-6">
                        <i class="fas fa-dollar-sign text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Biaya Transparan</h4>
                    <p class="text-gray-600 leading-relaxed">Tidak ada biaya tersembunyi. Semua biaya dijelaskan di awal dengan rinci dan jelas.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl hover-lift border-l-4 border-primary">
                    <div class="bg-primary/10 text-primary p-4 rounded-xl inline-block mb-6">
                        <i class="fas fa-clock text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Respons Cepat</h4>
                    <p class="text-gray-600 leading-relaxed">Kami merespons setiap konsultasi dengan cepat dan memberikan solusi hukum yang tepat waktu.</p>
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
