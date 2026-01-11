<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Kontak Kami - Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan</title>
    <meta name="description" content="Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan - Advokat dan Konsultan Hukum Profesional di Pekanbaru. Layanan Hukum Pidana, Perdata, Bisnis, Properti, dan Keluarga. Konsultasi Hukum Gratis.">
    <meta name="keywords" content="advokat pekanbaru, pengacara riau, hukum pekanbaru, konsultan hukum, lawyer riau, kuasa hukum, bantuan hukum, pengacara pidana, hukum perdata, sengketa tanah, hukum keluarga, firma hukum pekanbaru, dr parlindungan">
    <meta name="author" content="DR. Parlindungan, SH. MH. CLA., Advokat">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Kantor Hukum DR. Parlindungan, SH. MH. CLA. & Rekan - Advokat Terpercaya Pekanbaru">
    <meta property="og:description" content="Layanan hukum profesional di Pekanbaru dan Riau. Advokat berpengalaman menangani kasus pidana, perdata, bisnis, properti, dan hukum keluarga.">
    <meta property="og:image" content="img/image.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kantor Hukum DR. Parlindungan - Advokat Pekanbaru">
    <meta name="twitter:description" content="Solusi hukum terpercaya untuk individu dan bisnis di Pekanbaru. Konsultasi hukum gratis via WhatsApp.">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://advokatparlindungan.com">

    <!-- Additional Meta Tags -->
    <meta name="format-detection" content="telephone=yes">

    <!-- Scripts & Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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

        @keyframes pulse-shadow {
            0%, 100% { box-shadow: 0 0 20px rgba(248, 113, 113, 0.3); }
            50% { box-shadow: 0 0 40px rgba(248, 113, 113, 0.6); }
        }

        .pulse-shadow {
            animation: pulse-shadow 2s ease-in-out infinite;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Better focus styles */
        :focus-visible {
            outline: 2px solid #3b82f6;
            outline-offset: 2px;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-md shadow-lg fixed w-full top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-3">
                <div class="flex items-center space-x-3 group">
                    <div class="gradient-accent text-white rounded-lg p-2 shadow-lg">
                        <i class="fas fa-balance-scale text-xl"></i>
                    </div>
                    <div>
                        <span class="text-lg font-bold text-primary">KANTOR HUKUM</span>
                        <div class="text-xs text-gray-600 font-semibold">DR. Parlindungan, SH. MH. CLA. & Rekan</div>
                    </div>
                </div>

                <div class="hidden lg:flex items-center space-x-6">
                    <a href="/" class="text-gray-700 text-sm hover:text-accent transition-colors">Beranda</a>
                    <a href="layanan-unggulan" class="text-gray-700 text-sm hover:text-accent transition-colors">Layanan</a>
                    <a href="tentang-kami" class="text-gray-700 text-sm hover:text-accent transition-colors">Tentang</a>
                    <a href="hubungi-kami" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative">
                        Kontak
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
                    <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="gradient-accent text-white text-sm font-bold px-5 py-2 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-whatsapp mr-1.5"></i>
                        Konsultasi Gratis
                    </a>
                </div>

                <button id="mobile-menu-btn" class="lg:hidden text-primary focus:outline-none" aria-label="Toggle menu">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <div id="mobile-menu" class="hidden lg:hidden pb-4 space-y-1">
                <a href="/" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Beranda</a>
                <a href="layanan-unggulan" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Layanan</a>
                <a href="tentang-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Tentang</a>
                <a href="hubungi-kami" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Kontak</a>
                <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="block w-full gradient-accent text-sm text-white font-bold py-2 px-3 rounded-lg mt-2 text-center">
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
                    <i class="fas fa-phone-volume mr-2"></i>Hubungi Kami
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                Kami Siap <span class="gradient-accent bg-clip-text text-transparent">Membantu Anda</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Konsultasikan masalah hukum Anda dengan tim advokat profesional kami. Respons cepat, solusi tepat.
            </p>
        </div>
    </section>

    <!-- Contact Cards Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 -mt-24 relative z-10 mb-16">
                <!-- WhatsApp Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-green-500">
                    <div class="bg-green-100 text-green-600 p-4 rounded-xl inline-block mb-4">
                        <i class="fab fa-whatsapp text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">WhatsApp</h3>
                    <p class="text-sm text-gray-600 mb-4">Respons cepat via WhatsApp</p>
                    <p class="font-bold text-gray-800 mb-4">+62 812-6812-3180</p>
                    <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="block w-full bg-green-500 text-white text-center py-3 rounded-lg font-semibold hover:bg-green-600 transition">
                        <i class="fab fa-whatsapp mr-2"></i>Chat Sekarang
                    </a>
                </div>

                <!-- Phone Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-blue-500">
                    <div class="bg-blue-100 text-blue-600 p-4 rounded-xl inline-block mb-4">
                        <i class="fas fa-phone-alt text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">Telepon</h3>
                    <p class="text-sm text-gray-600 mb-4">Hubungi langsung kantor kami</p>
                    <p class="font-bold text-gray-800 mb-4">0812-6812-3180</p>
                    <a href="tel:081268123180" class="block w-full bg-blue-500 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
                        <i class="fas fa-phone-alt mr-2"></i>Telepon
                    </a>
                </div>

                <!-- Email Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-accent">
                    <div class="bg-red-100 text-accent p-4 rounded-xl inline-block mb-4">
                        <i class="fas fa-envelope text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">Email</h3>
                    <p class="text-sm text-gray-600 mb-4">Kirim email untuk konsultasi</p>
                    <p class="font-bold text-gray-800 mb-4 text-sm">pengacaraparlindungan@gmail.com</p>
                    <a href="mailto:pengacaraparlindungan@gmail.com" class="block w-full bg-accent text-white text-center py-3 rounded-lg font-semibold hover:bg-accent-dark transition">
                        <i class="fas fa-envelope mr-2"></i>Kirim Email
                    </a>
                </div>

                <!-- Office Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-primary">
                    <div class="bg-primary/10 text-primary p-4 rounded-xl inline-block mb-4">
                        <i class="fas fa-map-marker-alt text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">Kunjungi Kantor</h3>
                    <p class="text-sm text-gray-600 mb-4">Datang langsung ke kantor</p>
                    <p class="font-semibold text-gray-800 mb-4 text-xs leading-relaxed">Jl. Meranti No. 46, Pekanbaru</p>
                    <a href="#map" class="block w-full bg-primary text-white text-center py-3 rounded-lg font-semibold hover:bg-primary-dark transition">
                        <i class="fas fa-map-marked-alt mr-2"></i>Lihat Peta
                    </a>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl">
                        <div class="mb-8">
                            <h2 class="text-3xl font-bold text-primary mb-2">Formulir Konsultasi</h2>
                            <p class="text-gray-600">Isi formulir di bawah ini dan kami akan menghubungi Anda segera</p>
                        </div>

                        <form id="contactForm" class="space-y-6">
                            <!-- Nama & Email -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="nama" class="text-sm font-semibold text-gray-700">Nama Lengkap <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap Anda" class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-semibold text-gray-700">Alamat Email <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="email" id="email" name="email" required placeholder="contoh@email.com" class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    </div>
                                </div>
                            </div>

                            <!-- WhatsApp & Subjek -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="whatsapp" class="text-sm font-semibold text-gray-700">Nomor WhatsApp <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fab fa-whatsapp"></i>
                                        </span>
                                        <input type="tel" id="whatsapp" name="whatsapp" required placeholder="0812..." class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="bidang" class="text-sm font-semibold text-gray-700">Bidang Hukum <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-gavel"></i>
                                        </span>
                                        <select id="bidang" name="bidang" required class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all appearance-none">
                                            <option value="">Pilih bidang hukum</option>
                                            <option value="pidana">Hukum Pidana</option>
                                            <option value="perdata">Hukum Perdata</option>
                                            <option value="bisnis">Hukum Bisnis</option>
                                            <option value="properti">Hukum Properti</option>
                                            <option value="keluarga">Hukum Keluarga & Waris</option>
                                            <option value="ketenagakerjaan">Hukum Ketenagakerjaan</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Pesan -->
                            <div class="space-y-2">
                                <label for="pesan" class="text-sm font-semibold text-gray-700">Detail Permasalahan <span class="text-accent">*</span></label>
                                <textarea id="pesan" name="pesan" required rows="5" placeholder="Jelaskan permasalahan hukum Anda secara detail..." class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all resize-none"></textarea>
                                <p class="text-xs text-gray-500">*Semakin detail informasi yang Anda berikan, semakin baik kami dapat membantu</p>
                            </div>

                            <!-- Urgency -->
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700">Tingkat Urgensi</label>
                                <div class="flex flex-wrap gap-3">
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="radio" name="urgency" value="normal" checked class="text-primary focus:ring-primary">
                                        <span class="text-sm text-gray-700">Normal</span>
                                    </label>
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="radio" name="urgency" value="urgent" class="text-accent focus:ring-accent">
                                        <span class="text-sm text-gray-700">Mendesak</span>
                                    </label>
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="radio" name="urgency" value="very-urgent" class="text-accent focus:ring-accent">
                                        <span class="text-sm text-gray-700">Sangat Mendesak</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="w-full gradient-dark text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-primary/30 transition-all hover:-translate-y-1 flex items-center justify-center space-x-2">
                                <i class="fas fa-paper-plane"></i>
                                <span>Kirim Konsultasi</span>
                            </button>

                            <p class="text-xs text-center text-gray-500 mt-4">
                                <i class="fas fa-lock mr-1"></i>Data Anda akan kami jaga kerahasiaannya
                            </p>
                        </form>
                    </div>

                    <!-- FAQ Section -->
                    <div class="mt-8 bg-gradient-to-br from-primary/5 to-accent/5 p-8 rounded-3xl border border-primary/10">
                        <h3 class="text-2xl font-bold text-primary mb-6">Pertanyaan Umum</h3>
                        <div class="space-y-4">
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Berapa biaya konsultasi pertama?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Konsultasi pertama GRATIS! Anda dapat berkonsultasi tanpa biaya untuk mendiskusikan kasus Anda.</p>
                            </details>
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Berapa lama respons yang bisa saya harapkan?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Kami berusaha merespons dalam 1-2 jam kerja. Untuk kasus mendesak, hubungi langsung via WhatsApp.</p>
                            </details>
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Apakah data saya aman dan rahasia?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Ya, kerahasiaan klien adalah prioritas kami sesuai kode etik advokat Indonesia.</p>
                            </details>
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Apakah bisa konsultasi di luar jam kerja?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Untuk kasus mendesak, kami dapat mengatur konsultasi di luar jam kerja dengan perjanjian terlebih dahulu.</p>
                            </details>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Office Info -->
                    <div class="bg-gradient-to-br from-primary to-primary-dark text-white p-8 rounded-3xl shadow-2xl pulse-shadow">
                        <div class="text-center mb-6">
                            <div class="inline-block bg-white/20 p-4 rounded-2xl mb-4">
                                <i class="fas fa-building text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Kantor Kami</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-map-marker-alt text-accent-light mt-1"></i>
                                <div>
                                    <p class="font-semibold mb-1">Alamat</p>
                                    <p class="text-sm opacity-90 leading-relaxed">Jl. Meranti, No. 46, Kelurahan Labuh Baru Timur, Kecamatan Payung Sekaki, Kota Pekanbaru, Provinsi Riau</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <i class="fas fa-phone-alt text-accent-light mt-1"></i>
                                <div>
                                    <p class="font-semibold mb-1">Telepon</p>
                                    <p class="text-sm opacity-90">0812-6812-3180</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <i class="fas fa-envelope text-accent-light mt-1"></i>
                                <div>
                                    <p class="font-semibold mb-1">Email</p>
                                    <p class="text-sm opacity-90 break-words">pengacaraparlindungan@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white p-6 rounded-3xl shadow-xl border border-gray-100">
                        <h4 class="font-bold text-primary text-lg mb-4 flex items-center">
                            <i class="fas fa-clock mr-2 text-accent"></i> Jam Operasional
                        </h4>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-sm text-gray-700">Senin - Jumat</span>
                                <span class="text-sm font-semibold text-primary">08:00 - 17:00</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-sm text-gray-700">Sabtu</span>
                                <span class="text-sm font-semibold text-primary">09:00 - 13:00</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-sm text-gray-700">Minggu</span>
                                <span class="text-sm font-semibold text-accent">Tutup (Janji Temu)</span>
                            </div>
                        </div>
                        <div class="mt-4 p-3 bg-accent/10 rounded-lg">
                            <p class="text-xs text-gray-700"><i class="fas fa-info-circle text-accent mr-2"></i>Untuk kasus mendesak, hubungi kami via WhatsApp</p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-3xl border border-accent/20">
                        <h4 class="font-bold text-primary text-lg mb-4">Ikuti Kami</h4>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="flex-1 min-w-[100px] bg-green-500 text-white py-3 px-4 rounded-xl hover:bg-green-600 transition text-center font-semibold">
                                <i class="fab fa-whatsapp text-xl"></i>
                                <div class="text-xs mt-1">WhatsApp</div>
                            </a>
                            <a href="https://www.instagram.com/parlindungan.riau/" target="_blank" rel="noopener noreferrer" class="flex-1 min-w-[100px] bg-gradient-to-br from-purple-500 to-pink-500 text-white py-3 px-4 rounded-xl hover:from-purple-600 hover:to-pink-600 transition text-center font-semibold">
                                <i class="fab fa-instagram text-xl"></i>
                                <div class="text-xs mt-1">Instagram</div>
                            </a>
                            <a href="https://www.tiktok.com/@advokat_parlindungan" target="_blank" rel="noopener noreferrer" class="flex-1 min-w-[100px] bg-gray-900 text-white py-3 px-4 rounded-xl hover:bg-black transition text-center font-semibold">
                                <i class="fab fa-tiktok text-xl"></i>
                                <div class="text-xs mt-1">TikTok</div>
                            </a>
                        </div>
                    </div>

                    <!-- Quick WhatsApp -->
                    <div class="bg-green-500 text-white p-6 rounded-3xl shadow-2xl floating">
                        <div class="text-center">
                            <i class="fab fa-whatsapp text-5xl mb-3"></i>
                            <h4 class="font-bold text-lg mb-2">Butuh Bantuan Cepat?</h4>
                            <p class="text-sm opacity-90 mb-4">Chat langsung dengan tim kami</p>
                            <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="block bg-white text-green-600 font-bold py-3 px-6 rounded-xl hover:bg-gray-100 transition">
                                Hubungi via WhatsApp
                            </a>
                        </div>
                    </div>
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
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Brand & Deskripsi -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="gradient-accent text-white rounded-lg p-2 shadow-lg">
                            <i class="fas fa-balance-scale text-xl"></i>
                        </div>
                        <div>
                            <span class="text-lg font-bold">KANTOR HUKUM</span>
                            <div class="text-xs text-gray-300">DR. Parlindungan & Rekan</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm mb-6">
                        Solusi hukum terpercaya untuk individu, keluarga, dan perusahaan di Pekanbaru dan sekitarnya.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/parlindungan.riau/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://www.tiktok.com/@advokat_parlindungan" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Menu Utama</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="/" class="hover:text-accent transition">Beranda</a></li>
                        <li><a href="layanan-unggulan" class="hover:text-accent transition">Layanan</a></li>
                        <li><a href="tentang-kami" class="hover:text-accent transition">Tentang Kami</a></li>
                        <li><a href="hubungi-kami" class="hover:text-accent transition">Kontak</a></li>
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

