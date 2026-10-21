
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | Website Saya</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAF5EE] text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-5
                    flex flex-wrap justify-between items-center gap-4">

            <a href="{{ route('home') }}"
               class="text-2xl font-bold tracking-widest text-[#7B1F3A]">
                FASHION STORE
            </a>

            <div class="flex gap-6 text-sm font-medium">
                <a href="{{ route('home') }}"
                   class="text-[#7B1F3A]">Beranda</a>

                <a href="#koleksi"
                   class="hover:text-[#7B1F3A]">Koleksi</a>

                <a href="#tentang"
                   class="hover:text-[#7B1F3A]">Tentang Kami</a>
            </div>
        </div>
    </nav>

    <!-- Banner utama -->
    <main class="max-w-7xl mx-auto px-6 py-10">

        <section class="grid md:grid-cols-2 items-center
                        gap-8 bg-[#F0E2D8] rounded-3xl overflow-hidden">

            <div class="p-8 md:p-14">
                <p class="text-sm uppercase tracking-[4px]
                          text-[#7B1F3A] mb-5">
                    Welcome to Our Collection
                </p>

                <h1 class="text-4xl md:text-6xl font-bold
                           leading-tight text-[#7B1F3A]">
                    Temukan Gaya
                    Terbaikmu
                </h1>

                <p class="mt-5 text-gray-600 leading-relaxed">
                    Jelajahi berbagai pilihan fashion yang menarik
                    dan temukan gaya yang sesuai dengan dirimu.
                </p>

                <a href="#koleksi"
                   class="inline-block mt-8 bg-[#7B1F3A]
                          text-white px-8 py-3 rounded-full
                          hover:bg-[#5B172C] transition">
                    Jelajahi Koleksi
                </a>
            </div>

            <div class="p-5 md:p-8">
                <img
                    src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1000&q=85"
                    alt="Inspirasi fashion"
                    class="w-full h-80 md:h-[430px]
                           object-cover rounded-2xl">
            </div>
        </section>

        <!-- Koleksi -->
        <section id="koleksi" class="py-16">

            <div class="text-center mb-10">
                <p class="text-sm uppercase tracking-[3px]
                          text-[#7B1F3A]">
                    Our Collection
                </p>

                <h2 class="text-3xl font-bold mt-3">
                    Pilihan Koleksi
                </h2>

                <p class="mt-3 text-gray-500">
                    Inspirasi gaya untuk melengkapi penampilanmu.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

                <div class="bg-white rounded-2xl p-4 shadow-sm
                            hover:shadow-lg transition">
                    <img
                        src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=600&q=80"
                        alt="Koleksi atasan"
                        class="w-full h-64 object-cover rounded-xl">

                    <h3 class="font-bold text-lg mt-5">Atasan</h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Pilihan atasan untuk berbagai kesempatan.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-4 shadow-sm
                            hover:shadow-lg transition">
                    <img
                        src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=600&q=80"
                        alt="Koleksi bawahan"
                        class="w-full h-64 object-cover rounded-xl">

                    <h3 class="font-bold text-lg mt-5">Bawahan</h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Lengkapi gaya dengan koleksi pilihan.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-4 shadow-sm
                            hover:shadow-lg transition">
                    <img
                        src="https://images.unsplash.com/photo-1611652022419-a9419f74343d?auto=format&fit=crop&w=600&q=80"
                        alt="Koleksi aksesori"
                        class="w-full h-64 object-cover rounded-xl">

                    <h3 class="font-bold text-lg mt-5">Aksesori</h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Tambahkan sentuhan menarik pada gayamu.
                    </p>
                </div>

            </div>
        </section>

        <!-- Tentang -->
        <section id="tentang"
                 class="bg-white rounded-3xl p-8 md:p-12
                        text-center mb-10">

            <h2 class="text-2xl font-bold text-[#7B1F3A]">
                Tentang Kami
            </h2>

            <p class="max-w-2xl mx-auto mt-5 text-gray-600
                      leading-relaxed">
                Website ini dibuat untuk menampilkan informasi
                koleksi fashion dengan tampilan yang sederhana,
                nyaman, dan mudah digunakan.
            </p>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-[#7B1F3A] text-white text-center p-6">
        <h3 class="font-bold tracking-widest">FASHION STORE</h3>
        <p class="text-sm mt-2">
            &copy; {{ date('Y') }} Fashion Store. All rights reserved.
        </p>
    </footer>

</body>
</html>
