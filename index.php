<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClosetKedua - Thrift and Preloved Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color:rgb(253, 255, 240);
        }

        .brand-orange {
            color: #fbc106;
        }

        .bran-white {
            color:rgb(255, 255, 255);
        }

        .bg-brand-orange {
            background-color: #f97316;
        }

        .bg-brand-blue {
            background-color:rgb(21, 29, 49);
        }

        .hover\:bg-brand-orange:hover {
            background-color: #ea580c;
        }

        .hover\:bg-brand-blue:hover {
            background-color:rgb(21, 29, 49);
        }
    </style>
</head>
<body>
    <!-- Header Section -->
   <html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClosetKedua - Thrift and Preloved Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(253, 255, 240);
        }

        .brand-orange {
            color: #fbc106;
        }

        .bran-white {
            color: rgb(255, 255, 255);
        }

        .bg-brand-orange {
            background-color: #f97316;
        }

        .bg-brand-blue {
            background-color: rgb(21, 29, 49);
        }

        .hover\:bg-brand-orange:hover {
            background-color: #ea580c;
        }

        .hover\:bg-brand-blue:hover {
            background-color: rgb(21, 29, 49);
        }
    </style>
</head>
<body>
    <!-- Header -->
<header class="sticky top-0 z-50 bg-black shadow-sm">
    <nav class="bg-brand-blue shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-white">
                        <span class="text-orange-400">Closet</span>
                        <span class="text-white">Kedua</span>
                    </h1>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-4">
                    <a href="#home" class="text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Home</a>
                    <a href="#about" class="text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Tentang</a>
                    <a href="#products" class="text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Produk</a>
                    <a href="#paket" class="text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Paket</a>
                    <a href="#testimoni" class="text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Testimoni</a>
                    <a href="#contact" class="text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Kontak</a>
                </div>

                <!-- Login Button -->
                <div class="hidden md:flex">
                    <a href="login.php"
                       class="bg-white text-brand-blue font-semibold text-lg px-6 py-2 rounded-full shadow hover:bg-brand-blue hover:text-white transition duration-300">
                        Login
                    </a>
                </div>

                <!-- Mobile Button -->
                <button id="mobileMenuButton" class="md:hidden text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="md:hidden hidden">
                <a href="#home" class="block text-white px-4 py-2 hover:bg-blue-900">Home</a>
                <a href="#about" class="block text-white px-4 py-2 hover:bg-blue-900">Tentang</a>
                <a href="#products" class="block text-white px-4 py-2 hover:bg-blue-900">Produk</a>
                <a href="#paket" class="block text-white px-4 py-2 hover:bg-blue-900">Paket</a>
                <a href="#testimoni" class="block text-white px-4 py-2 hover:bg-blue-900">Testimoni</a>
                <a href="#contact" class="block text-white px-4 py-2 hover:bg-blue-900">Kontak</a>
                <a href="login.php"
                   class="block bg-white text-brand-blue font-semibold text-lg px-6 py-2 rounded-full text-center shadow hover:bg-brand-blue hover:text-white transition duration-300">
                    Login
                </a>
            </div>
        </div>
    </nav>
</header>


<body>
    <!-- Main Content -->
    <main class="w-full" id="home">
       <section class="relative w-full h-[50vh] bg-cover bg-center flex items-center justify-center" style="background-image: url('gambar/bg.jpg');">
      <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 text-center px-4">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Selamat Datang di ClosetKedua</h1>
                <p class="text-white text-lg mb-6 max-w-2xl mx-auto">Temukan thrift premium yang tampil seperti baru. Fashion berkelanjutan dengan harga terjangkau.</p>
                 <a href="login.php"
                    class="bg-orange-500 text-white px-8 py-4 font-bold text-lg rounded-full shadow-md hover:bg-white hover:text-orange-500 transition-all duration-300">
                    Belanja Sekarang
                </a>
            </div>
        </section>

      <!-- About Section -->
        <section class="py-16" id="about">
        <div class="container mx-auto bg-blue-50 rounded-L p-5 md:p-7">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center md:text-CENTER">Tentang ClosetKedua</h2>
                
            <div class="grid md:grid-cols-2 gap-5 items-center">
            <!-- Logo -->
            <div class="flex justify-center">
                <img src="gambar\Logo.png" alt="Logo ClosetKedua" class="w-30 h-auto rounded-lg shadow-md">
            </div>
            
            <!-- Deskripsi -->
            <div>
                
                <p class="text-gray-700 mb-4">
                Di tengah gempuran fast fashion yang membanjiri pasar, kami hadir sebagai solusi untuk para pencinta gaya yang peduli terhadap lingkungan. Setiap produk yang kami tawarkan telah melalui proses seleksi ketat dan perawatan agar tetap layak pakai, higienis, dan trendi.
                </p>
                
                <p class="text-gray-700 mb-4">
                ClosetKedua adalah brand thrift dan preloved yang didirikan oleh <strong>Farra Athikasari</strong> bersama <strong>Grup Digital Marketing Kelompok 4</strong> pada tahun 2025. Brand ini lahir dari semangat untuk menciptakan alternatif belanja fashion yang tidak hanya terjangkau namun juga ramah lingkungan.
                </p>
                
                <p class="text-gray-700 mb-4">
                Logo ClosetKedua menampilkan simbol hanger yang mewakili keseimbangan antara fungsi dan fashion. Warna netral pada logo dipilih untuk memberi kesan minimalis dan profesional, sedangkan tulisan "Preloved & Thrift" menegaskan identitas kami sebagai penyedia produk secondhand yang bernilai dan layak pakai.
                </p>
                
                <p class="text-gray-700">
                Kami percaya bahwa setiap pakaian punya cerita, dan dengan memberikan 'kehidupan kedua', kita tidak hanya menghemat pengeluaran, tapi juga mengurangi limbah tekstil yang mencemari bumi. Mari menjadi bagian dari perubahan—berbelanja cerdas, ramah lingkungan, dan tetap modis bersama ClosetKedua.
                </p>
            </div>
            
            </div>
        </div>
        </section>


     <!-- Featured Products Section -->
        <section class="py-16" id="products">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Katalog Produk</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            
            <!-- Produk 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="w-full aspect-[4/3] bg-gray-100">
                <img src="assets\img\hoodie crop.jpg" alt="Denim Vintage" class="w-full h-full object-contain">
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800">Sweater Crop</h3>
                <p class="text-brand-blue font-bold mt-2">Rp 35.000</p>
                <a href="login.php" class="mt-4 block bg-orange-200 hover:bg-orange-300 text-blue-800 py-2 px-4 rounded-lg w-full text-center">
                Beli Sekarang
                </a>
            </div>
            </div>

            <!-- Produk 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="w-full aspect-[4/3] bg-gray-100">
                <img src="assets\img\kemeja putih.jpg" alt="Blazer Elegan" class="w-full h-full object-contain">
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800">Kemeja Putih Baloon</h3>
                <p class="text-brand-blue font-bold mt-2">Rp 40.000</p>
                <a href="login.php" class="mt-4 block bg-orange-200 hover:bg-orange-300 text-blue-800 py-2 px-4 rounded-lg w-full text-center">
                Beli Sekarang
                </a>
            </div>
            </div>

            <!-- Produk 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="w-full aspect-[4/3] bg-gray-100">
                <img src="assets\img\jeans putih 2.jpg" alt="Blazer Elegan" class="w-full h-full object-contain">
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800">White Jeans</h3>
                <p class="text-brand-blue font-bold mt-2">Rp 60.000</p>
                <a href="login.php" class="mt-4 block bg-orange-200 hover:bg-orange-300 text-blue-800 py-2 px-4 rounded-lg w-full text-center">
                Beli Sekarang
                </a>
            </div>
            </div>
            <!-- Produk 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="w-full aspect-[4/3] bg-gray-100">
                <img src="assets\img\dress.jpg" alt="Denim Vintage" class="w-full h-full object-contain">
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800">Dress</h3>
                <p class="text-brand-blue font-bold mt-2">Rp 45.000</p>
                <a href="login.php" class="mt-4 block bg-orange-200 hover:bg-orange-300 text-blue-800 py-2 px-4 rounded-lg w-full text-center">
                Beli Sekarang
                </a>
            </div>
            </div>
            <!-- Produk 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="w-full aspect-[4/3] bg-gray-100">
                <img src="assets\img\hot pants 2.jpg" alt="Denim Vintage" class="w-full h-full object-contain">
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800">Hotpans Jeans</h3>
                <p class="text-brand-blue font-bold mt-2">Rp 25.000</p>
                <a href="login.php" class="mt-4 block bg-orange-200 hover:bg-orange-300 text-blue-800 py-2 px-4 rounded-lg w-full text-center">
                Beli Sekarang
                </a>
            </div>
            </div>
            <!-- Produk 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="w-full aspect-[4/3] bg-gray-100">
                <img src="assets\img\kemeja kotak.jpg" alt="Denim Vintage" class="w-full h-full object-contain">
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800">Kemeja Vintage Kotak</h3>
                <p class="text-brand-blue font-bold mt-2">Rp 35.000</p>
                <a href="login.php" class="mt-4 block bg-orange-200 hover:bg-orange-300 text-blue-800 py-2 px-4 rounded-lg w-full text-center">
                Beli Sekarang
                </a>
            </div>
            </div>
        </div>

        <!-- Tombol Lihat Produk -->
        <div class="mt-10 text-center">
            <a href="login.php"
            class="inline-block bg-orange-500 text-white text-lg font-semibold px-8 py-4 rounded-full shadow hover:bg-white hover:text-orange-500 transition duration-300">
            Lihat Produk Lain
            </a>
        </div>
        </section>


        <section class="py-16 bg-gray-100" id="paket" 
         x-data="{ activeSlide: 0, slides: [
        'gambar/paket1.png',
        'gambar/paket2.png',
        'gambar/paket3.png',
        'gambar/paket4.png'
        ] }">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Paket Pesanan</h2>
            <div class="relative w-full max-w-md mx-auto">
            <div class="relative overflow-hidden rounded-xl" style="aspect-ratio: 1 / 1;">
                <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index" 
                    class="absolute inset-0 transition-opacity duration-500" 
                    x-transition>
                    <img :src="slide" 
                        class="w-full h-full object-cover rounded-xl" 
                        alt="Slide Paket">
                </div>
                </template>

                <!-- Tombol Kiri -->
                <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                        class="bg-brand-blue text-white px-3 py-2 rounded-l hover:bg-blue-900">
                    ‹
                </button>
                </div>
                <!-- Tombol Kanan -->
                <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="activeSlide = (activeSlide + 1) % slides.length"
                        class="bg-brand-blue text-white px-3 py-2 rounded-r hover:bg-blue-900">
                    ›
                </button>
                </div>
            </div>
            <div class="mt-6">
                <a href="login.php" 
                class="inline-block bg-orange-400 hover:bg-orange-500 text-white px-6 py-2 rounded-lg">
                View More
                </a>
            </div>
            </div>
        </div>
        </section>


<!-- Testimoni Gambar Otomatis -->
    <section class="py-16 bg-white" id="testimoni"
            x-data="{
                current: 0,
                images: [
                     'gambar/testi1.png',
                    'gambar/testi2.png',
                    'gambar/testi3.png'
                ],
                init() {
                    setInterval(() => {
                        this.current = (this.current + 1) % this.images.length;
                    }, 4000);
                }
            }"
            x-init="init()">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Testimoni Pelanggan</h2>
            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                Testimoni ini berdasarkan penilaian dari Shopee. Apa kata mereka?
            </h3>

            <div class="relative w-full max-w-3xl mx-auto rounded-lg overflow-hidden shadow-lg bg-gray-100 aspect-[4/3]">
                <template x-for="(image, index) in images" :key="index">
                    <div x-show="current === index"
                        class="absolute inset-0 transition-opacity duration-700 ease-in-out"
                        x-transition:enter="transition-opacity duration-700"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-opacity duration-700"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">
                        <img :src="image" alt="Testimoni Pelanggan"
                            class="w-full h-full object-contain" loading="lazy">
                    </div>
                </template>
            </div>
        </div>
    </section>


       <!-- Contact Section -->
    <section class="py-16 bg-gray-100" id="contact">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Contact Us</h2>
    <p class="text-center text-gray-700 mb-8 max-w-2xl mx-auto">
      Halo teman-teman! Lagi cari baju <strong>Thrift</strong> atau <strong>Preloved</strong> yang berkualitas tapi ramah di kantong? Yuk follow dan support sosial media kami! Banyak pilihan eksklusif dan gratis ongkir juga lho 😍👇
    </p>
    <div class="bg-white p-8 rounded-xl shadow-md">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Toko & Marketplace</h3>
          <p class="text-gray-700 mb-2">Alamat: Lamongan, Jawa Timur, Indonesia</p>
          <p class="text-gray-700 mb-2">WhatsApp: <a href="https://wa.me/62895364873919?text=Halo%20ClosetKedua%2C%20saya%20ingin%20tanya-tanya%20produk" class="text-green-600 hover:underline" target="_blank">0895-3648-73919</a></p>
          <p class="text-gray-700 mb-2">Shopee: <a href="https://shopee.co.id/farra_athika00" class="text-orange-500 hover:underline" target="_blank">shopee.co.id/farra_athika00</a></p>
          <p class="text-gray-700 mb-2">Blogger: <a href="https://closetkedua.blogspot.com" class="text-blue-600 hover:underline" target="_blank">closetkedua.blogspot.com</a></p>
         <p class="text-gray-700 mb-2">📢 WhatsApp Channel: 
            <a href="https://whatsapp.com/channel/0029Vb6I6hLBKfi2VovOz309" class="text-green-700 hover:underline" target="_blank">
              <br> Klik untuk Bergabung
            </a>
        </div>
        <div>
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Sosial Media</h3>
          <ul class="space-y-2">
            <li><a href="https://www.instagram.com/closetkedua?igsh=MjlqdXVtYWJvNjQw&utm_source=qr" target="_blank" class="text-gray-700 hover:text-pink-600 transition"><i class="fab fa-instagram"></i> Instagram: @closetkedua</a></li>
            <li><a href="https://www.tiktok.com/@closetkedua?_t=ZS-8wimkde9I7r&_r=1" target="_blank" class="text-gray-700 hover:text-black transition"> <i class="fab fa-tiktok"></i> TikTok: @closetkedua</a></li>
            <li><a href="https://www.facebook.com/share/16KVA4soEa/" target="_blank" class="text-gray-700 hover:text-blue-700 transition"><i class="fab fa-facebook-f"></i> Facebook: ClosetKedua</a></li>
          </ul>
        </div>
      </div>
       <!-- Tombol Login Tengah -->
      <div class="mt-10 text-center">
        <a href="login.php"
           class="inline-block bg-blue-500 text-white text-lg font-semibold px-8 py-4 rounded-full shadow hover:bg-white hover:text-blue-500 transition duration-300">
          Login Sekarang Juga!
        </a>
      </div>

    </div>
  </div>
</section>
    </div>
  </div>
</section>

        
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">ClosetKedua</h3>
                <p class="text-gray-400">Pilihan fashion Thrift & Preloved yang berkualitas dan terjangkau untuk gaya hidup berkelanjutan.</p>
             </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                     <ul class="space-y-2">
                    <li><a href="#home" class="hover:text-white text-gray-400">Home</a></li>
                    <li><a href="#about" class="hover:text-white text-gray-400">Tentang</a></li>
                    <li><a href="#products" class="hover:text-white text-gray-400">Produk</a></li>
                    <li><a href="#paket" class="hover:text-white text-gray-400">Paket</a></li>
                    <li><a href="#testimoni" class="hover:text-white text-gray-400">Testimoni</a></li>
                    <li><a href="#contact" class="hover:text-white text-gray-400">Kontak</a></li>
                </ul>
                </div>                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4 mb-4 text-2xl">
                        <a href="https://www.facebook.com/share/16KVA4soEa/" target="_blank" class="text-gray-400 hover:text-white transition" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/closetkedua?igsh=MjlqdXVtYWJvNjQw&utm_source=qr" target="_blank" class="text-gray-400 hover:text-white transition" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@closetkedua?_t=ZS-8wimkde9I7r&_r=1" target="_blank" class="text-gray-400 hover:text-white transition" title="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                     <p class="text-gray-400">Daftarkan email Anda untuk mendapatkan informasi terbaru.</p>
               
                <form class="mt-4 flex">
                    <input type="email" placeholder="Email Anda" class="px-4 py-2 w-full rounded-l-lg text-gray-800 focus:outline-none">
                    <button type="submit" class="bg-brand-orange px-4 py-2 rounded-r-lg hover:bg-orange-700 transition">Daftar</button>
                </form> 
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 ClosetKedua. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle functionality
        document.getElementById('mobileMenuButton').addEventListener('click', function () {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/62895364873919?text=Halo%20ClosetKedua%2C%20saya%20ingin%20bertanya%20tentang%20produk%20Anda."
   class="fixed bottom-5 right-5 bg-green-500 text-white px-5 py-3 rounded-full shadow-lg hover:bg-green-600 transition z-50 flex items-center gap-2 text-lg"
   target="_blank"
   title="Chat via WhatsApp">
   <i class="fab fa-whatsapp"></i> Chat via WhatsApp
</a>
</body>
</html>
