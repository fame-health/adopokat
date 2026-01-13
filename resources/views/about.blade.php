<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan</title>
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
            50% { transform: translateY(-15px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .timeline-line {
            position: relative;
        }

        .timeline-line::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #1e3a8a, #f87171);
            transform: translateX(-50%);
        }

        @media (max-width: 768px) {
            .timeline-line::before {
                left: 20px;
            }
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
                    <a href="layanan-unggulan" class="text-gray-700 text-sm hover:text-accent transition-colors">Layanan</a>
                    <a href="tentang-kami" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative">
                        Tentang
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
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
                <a href="layanan-unggulan" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Layanan</a>
                <a href="tentang-kami" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Tentang</a>
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
                    <i class="fas fa-users mr-2"></i>Tentang Kami
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                Kantor Hukum <span class="gradient-accent bg-clip-text text-transparent">Terpercaya</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Melayani dengan integritas, profesionalisme, dan dedikasi tinggi untuk keadilan
            </p>
        </div>

    </section>

    <!-- Profile Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative order-2 lg:order-1">
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

                <div class="order-1 lg:order-2">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Profil Pemimpin</span>
                    <h2 class="text-3xl font-bold text-primary mb-4 mt-2">
                        DR. Parlindungan, SH. MH. CLA.
                    </h2>
                    <div class="w-20 h-1 gradient-accent rounded-full mb-6"></div>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        DR. Parlindungan adalah seorang advokat berpengalaman dengan dedikasi tinggi dalam memberikan layanan hukum terbaik. Dengan latar belakang pendidikan yang solid dan pengalaman praktik lebih dari 15 tahun, beliau telah menangani ratusan kasus dengan tingkat keberhasilan yang tinggi.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Beliau memiliki keahlian khusus dalam berbagai bidang hukum, termasuk hukum pidana, perdata, bisnis, dan properti. Komitmennya adalah memberikan solusi hukum yang tepat, efektif, dan berorientasi pada kepentingan terbaik klien.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-4 rounded-xl border border-primary/20">
                            <i class="fas fa-graduation-cap text-2xl text-primary mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Pendidikan</h4>
                            <p class="text-xs text-gray-600">S3 Ilmu Hukum, Magister Hukum, Sarjana Hukum</p>
                        </div>
                        <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-4 rounded-xl border border-accent/20">
                            <i class="fas fa-certificate text-2xl text-accent mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Sertifikasi</h4>
                            <p class="text-xs text-gray-600">CLA (Certified Legal Advisor), PERADI</p>
                        </div>
                        <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-4 rounded-xl border border-accent/20">
                            <i class="fas fa-gavel text-2xl text-accent mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Spesialisasi</h4>
                            <p class="text-xs text-gray-600">Pidana, Perdata, Bisnis, Properti</p>
                        </div>
                        <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-4 rounded-xl border border-primary/20">
                            <i class="fas fa-award text-2xl text-primary mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Prestasi</h4>
                            <p class="text-xs text-gray-600">500+ Kasus Sukses, 98% Win Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 gradient-dark text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Prestasi & Pencapaian</h2>
                <p class="text-gray-300">Dedikasi kami dalam angka</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-calendar-check text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">10+</div>
                    <div class="text-sm text-gray-300">Tahun Pengalaman</div>
                </div>

                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-briefcase text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">500+</div>
                    <div class="text-sm text-gray-300">Kasus Ditangani</div>
                </div>

                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-trophy text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">98%</div>
                    <div class="text-sm text-gray-300">Tingkat Keberhasilan</div>
                </div>

                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-users text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">450+</div>
                    <div class="text-sm text-gray-300">Klien Puas</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-xl hover-lift">
                    <div class="bg-primary/10 text-primary p-4 rounded-2xl inline-block mb-6">
                        <i class="fas fa-eye text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4">Visi Kami</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Menjadi kantor hukum terdepan di Riau yang dikenal karena profesionalisme, integritas, dan dedikasi dalam menegakkan keadilan serta memberikan solusi hukum terbaik bagi klien.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Kami berkomitmen untuk terus berkembang dan berinovasi dalam memberikan layanan hukum yang berkualitas tinggi sesuai dengan perkembangan hukum dan kebutuhan masyarakat.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-xl hover-lift">
                    <div class="gradient-accent text-white p-4 rounded-2xl inline-block mb-6">
                        <i class="fas fa-bullseye text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4">Misi Kami</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Memberikan layanan hukum profesional dengan standar tertinggi</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Mengutamakan kepentingan dan kepuasan klien dalam setiap penanganan kasus</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Menjunjung tinggi etika profesi dan integritas dalam praktik hukum</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Memberikan solusi hukum yang efektif dan berorientasi hasil</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Nilai-Nilai Kami</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Prinsip yang Kami Pegang
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-2xl border border-primary/20 hover-lift text-center">
                    <div class="bg-primary text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-shield-alt text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Integritas</h4>
                    <p class="text-sm text-gray-600">Menjunjung tinggi kejujuran dan etika profesi dalam setiap tindakan</p>
                </div>

                <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-2xl border border-accent/20 hover-lift text-center">
                    <div class="gradient-accent text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-star text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Profesionalisme</h4>
                    <p class="text-sm text-gray-600">Memberikan layanan terbaik dengan keahlian dan kompetensi tinggi</p>
                </div>

                <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-2xl border border-primary/20 hover-lift text-center">
                    <div class="bg-primary text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-heart text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Dedikasi</h4>
                    <p class="text-sm text-gray-600">Berkomitmen penuh untuk mencapai hasil terbaik bagi klien</p>
                </div>

                <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-2xl border border-accent/20 hover-lift text-center">
                    <div class="gradient-accent text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-balance-scale text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Keadilan</h4>
                    <p class="text-sm text-gray-600">Memperjuangkan hak dan keadilan untuk setiap klien</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Perjalanan Kami</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Timeline Kantor Hukum
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="timeline-line relative py-8">
                <!-- Timeline Item 1 -->
                <div class="grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="text-right md:pr-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2010</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Pendirian Kantor</h4>
                            <p class="text-sm text-gray-600">DR. Parlindungan mendirikan kantor hukum pertama di Pekanbaru dengan fokus layanan hukum pidana dan perdata</p>
                        </div>
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-primary rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg md:hidden"></div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="hidden md:block"></div>
                    <div class="md:pl-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2015</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Ekspansi Layanan</h4>
                            <p class="text-sm text-gray-600">Menambah bidang layanan termasuk hukum bisnis, properti, dan ketenagakerjaan dengan tim yang lebih besar</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-accent rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-lg md:hidden"></div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="text-right md:pr-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2020</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Pencapaian 500 Kasus</h4>
                            <p class="text-sm text-gray-600">Mencapai milestone 500+ kasus yang berhasil ditangani dengan tingkat keberhasilan 98%</p>
                        </div>
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-primary rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg md:hidden"></div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="grid md:grid-cols-2 gap-8 relative">
                    <div class="hidden md:block"></div>
                    <div class="md:pl-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2025</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Transformasi Digital</h4>
                            <p class="text-sm text-gray-600">Menghadirkan layanan konsultasi online dan sistem manajemen kasus digital untuk kemudahan klien</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-accent rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-lg md:hidden"></div>
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
