<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bank sampah</title>
    {{-- todo ===== sambugan ke tailwind wcss ====== --}}
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body class="font-Quicksand">
    {{-- ! ===== header navbar start ==== --}}
    <header class="fixed inset-x-0 top-0 z-50 bg-primary">
        <nav class="flex items-center justify-between p-2 lg:px-8">
            <div class="flex lg:flex-1 items-center">
                <a href="#" class="flex items-center">
                    <img class="h-12 lg:h-16 w-auto rounded-full" src="{{ asset('img/logo-bsu.jpg') }}"
                        alt="Logo" />
                </a>
                <span class="ml-3 text-xl lg:text-2xl font-bold leading-6 text-white">Bank Sampah</span>
            </div>

            <div class="flex lg:hidden">
                <button id="mobile-menu-button" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12 lg:mr-40">
                <a href="#Beranda" class="text-lg font-bold leading-6 text-white hover:text-teal-200">Beranda</a>
                <a href="#About" class="text-lg font-bold leading-6 text-white hover:text-teal-200">About</a>
                <a href="#Kerajinan" class="text-lg font-bold leading-6 text-white hover:text-teal-200">Kerajinan</a>
                <a href="#Kontak" class="text-lg font-bold leading-6 text-white hover:text-teal-200">Kontak</a>
            </div>
            {{-- <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#"
                    class="rounded-md bg-white px-3.5 py-2.5 text-sm font-bold text-primary shadow-sm hover:bg-green-600 hover:text-white">Log
                    in</a>
            </div> --}}
        </nav>
        <!-- todo ============= Mobile menu ============== -->
        <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">

            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between bg-primary rounded-lg p-2">
                    <div class="flex lg:flex-1 items-center">
                        <a href="#" class="flex items-center">
                            <img class="h-10 w-auto rounded-full" src="{{ asset('img/logo-bsu.jpg') }}"
                                alt="Logo" />
                        </a>
                        <span class="ml-2 text-md font-semibold leading-6 text-white">Bank Sampah</span>
                    </div>
                    <button id="close-menu-button" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#Beranda"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-primary hover:text-slate-100 text-center">Beranda</a>
                            <a href="#About"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-primary hover:text-slate-100 text-center">About</a>
                            <a href="#Kerajinan"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-primary hover:text-slate-100 text-center">Kerajinan</a>
                            <a href="#Kontak"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-primary hover:text-slate-100 text-center">Kontak</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="block w-full rounded-md bg-primary px-3.5 py-2.5 text-base font-semibold text-white shadow-sm hover:bg-hijau sm:hidden text-center">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- ! ===== header navbar end ==== --}}
    <div class="relative isolate px-6 pt-5 lg:px-8 bg-cover bg-center"
        style="background-image: url('{{ asset('images/trash-2.jpeg') }}')" id="Beranda">
        <div class="absolute inset-0 bg-white/5 backdrop-blur-sm -z-10" aria-hidden="true"></div>
        <div
            class="mx-auto max-w-7xl py-32 sm:py-48 lg:py-56 flex flex-col lg:flex-row items-center lg:items-start justify-between">
            <div class="lg:w-1/2 text-left">
                <h1 class="text-2xl sm:text-3xl lg:text-5xl font-bold text-gray-800 font-caveat">
                    <span id="typing-text"></span>
                </h1>
                <p class="mt-6 text-base lg:text-lg leading-8 text-gray-950">
                    "Bank Sampah Pelita Bangsa adalah inisiatif untuk mengelola sampah
                    secara efektif dan ramah lingkungan. Kami bertujuan untuk
                    meningkatkan kesadaran masyarakat tentang pentingnya daur ulang
                    dan pengelolaan sampah."
                </p>
                <div class="mt-10 flex items-center justify-start gap-x-6">
                    <a href="#"
                        class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-slate-100 shadow-sm hover:bg-teal-500"
                        onclick="showAdminLoginModal()">Login Admin</a>
                    <a href="{{ route('login') }}"
                        class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-slate-100 shadow-sm hover:bg-blue-500">Login
                        Nasabah</a>
                </div>
            </div>
            {{-- <div class="lg:w-1/2 lg:mt-0 flex justify-center">
                <img src="{{ asset('images/company-1.jpeg') }}" alt="Gambar Bank Sampah Pelita Bangsa"
                    class="w-3/4 h-auto" />
            </div> --}}
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true"></div>
    </div>

    {{-- ! ====== VISI DAN MISI START ===== --}}
    <section class="scroll-mt-28" id="About">
        <div class="flex justify-center mt-10" id="About">
            <div class="bg-primary px-12 py-2 rounded-lg">
                <h1 class="text-white font-bold text-lg">About</h1>
            </div>
        </div>
        <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8 container">
            <div class="text-center mb-10">
                <p class="lg:text-lg">
                    Bank Sampah Pelita Bangsa didirikan dengan tujuan untuk memberikan
                    solusi berkelanjutan terhadap masalah sampah di masyarakat. Melalui
                    pendekatan yang holistik dan edukatif, kami berkomitmen untuk
                    meningkatkan kesadaran dan partisipasi masyarakat dalam pengelolaan
                    sampah. Kami percaya bahwa dengan kolaborasi dan inovasi, kita bisa
                    menciptakan lingkungan yang lebih bersih dan sehat.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-6">
                {{-- ! ====== Card Visi start =========== --}}
                <div class="bg-gray-100 shadow-xl overflow-hidden flex-1 border">
                    <div class="bg-primary p-1 border-2 border-green-700">
                        <h2 class="text-lg lg:text-2xl font-bold text-center text-white">
                            Visi
                        </h2>
                    </div>
                    <div class="p-6 items-center justify-center flex">
                        <p class="text-base">
                            Menjadikan bank sampah yang mendorong dan membimbing masyarakat
                            untuk menjaga lingkungan dan membangun budaya peduli terhadap
                            sampah.
                        </p>
                    </div>
                </div>
                {{-- ! ====== Card Visi end =========== --}}
                {{-- ! ====== Card Misi start =========== --}}
                <div class="bg-gray-100 shadow-lg overflow-hidden flex-1 border">
                    <div class="bg-primary p-1">
                        <h2 class="text-lg lg:text-2xl font-bold text-white text-center">
                            Misi
                        </h2>
                    </div>
                    <div class="p-6">
                        <ol class="list-decimal list-inside text-base space-y-2 pl-4">
                            <li class="mb-2">
                                Mengelola dan memanfaatkan sampah secara efisien untuk
                                mengurangi pencemaran lingkungan.
                            </li>
                            <li class="mb-2">
                                Mendidik masyarakat tentang pentingnya pengelolaan sampah yang
                                berkelanjutan.
                            </li>
                            <li class="mb-2">
                                Mendorong partisipasi aktif masyarakat dalam praktik daur
                                ulang dan pengurangan sampah.
                            </li>
                            <li class="mb-2">
                                Menciptakan peluang ekonomi melalui pengolahan sampah yang
                                berkelanjutan.
                            </li>
                            <li class="mb-2">
                                Bekerja sama dengan pemerintah dan organisasi lain untuk
                                mencapai tujuan lingkungan yang lebih bersih dan sehat.
                            </li>
                        </ol>
                    </div>
                </div>
                {{-- ! =========== Card Misi end =========== --}}
            </div>
        </div>
    </section>

    {{-- ! ====== VISI DAN MISI END ==================== --}}

    {{--  ! ============================= KERAJINAN  start ========== --> --}}
    <div class="container scroll-mt-28" id="Kerajinan">
        <div class="flex justify-center mt-10">
            <div class="bg-primary px-12 py-2 rounded-lg">
                <h1 class="text-white font-bold text-lg">Kerajinan</h1>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class="max-w-3xl mx-auto px-4">
                <p class="leading-relaxed text-justify">
                    Di Bank Sampah Pelita Bangsa, kami tidak hanya berfokus pada
                    pengumpulan dan pengelolaan sampah, tetapi juga pada transformasi
                    sampah menjadi produk-produk kerajinan yang bernilai tinggi. Melalui
                    kreativitas dan keterampilan, sampah anorganik seperti plastik,
                    kertas, dan kaleng diubah menjadi barang-barang kerajinan tangan
                    yang unik dan bermanfaat. Produk-produk ini tidak hanya membantu
                    mengurangi limbah, tetapi juga memberikan dampak ekonomi positif
                    bagi para pengrajin dan komunitas sekitar.
                </p>
                <p class="leading-relaxed text-justify mt-4">
                    Kami menyediakan berbagai macam kerajinan, mulai dari tas dan dompet
                    dari plastik bekas, hingga perhiasan dan dekorasi rumah dari bahan
                    daur ulang. Setiap produk yang dihasilkan memiliki cerita dan nilai
                    tersendiri, mencerminkan semangat keberlanjutan dan kepedulian
                    terhadap lingkungan. Melalui menu Kerajinan ini, Anda dapat melihat
                    dan membeli berbagai produk kerajinan yang dihasilkan oleh anggota
                    Bank Sampah Pelita Bangsa, sekaligus mendukung gerakan ramah
                    lingkungan.
                </p>
            </div>
        </div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/bunga-tutup-botol.jpg') }}" alt="tutup botol"
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        Kerajinan bunga dari tutup botol
                    </h3>
                    {{-- ! ====== harga kerajinan ======== --}}
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>
                <a href="#" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/bunga-sedotan.jpg') }}" alt="bunga dari tutup botol"
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Bunga dari bekas sedotan</h3>
                    {{-- ! ====== harga kerajinan ======== --}}
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>
                <a href="#" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/stik eskrim.jpg') }}" alt="stik eskrim"
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        Kerajinan dari stik ice-cream
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>
                <a href="#" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/tas-bungkus-kopi.jpg') }}" alt="keranjang"
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Tas dari bungkus kopi</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>
                <a href="#" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/Tempat-sendok-kaleng.jpg') }}" alt="kaleng"
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        Tempat sendok dari kaleng bekas
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>
                <a href="" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/bunga.jpg') }}" alt="hiasan bunga"
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        Hiasan bunga dari sedotan
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>
                <a href="" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/tempat-minuman.jpg') }}"
                            alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        Tempat minuman dari gelas plastik
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>
                <a href="" class="group">
                    <div class="w-full h-48 overflow-hidden rounded-lg bg-gray-200">
                        <img src="{{ asset('img/vas bunga.jpeg') }}"
                            alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                            class="w-full h-full object-cover group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        Vas bunga dari botol bekas
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"></p>
                </a>

                {{-- ! ======  PRODUK LAINNYA TAMBAHKAN DISINI ................ =========== --}}
            </div>
        </div>
    </div>
    {{-- ! ======  kirim text pesan  =========== --}}
    <section class="contact-section scroll-m-24" id="Kontak">
        <div class="flex justify-center mt-10">
            <div class="bg-primary w-36 h-10 justify-center items-center flex rounded-lg">
                <h1 class="text-white font-bold text-lg text-center">Kontak</h1>
            </div>
        </div>
        <div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-base lg:text-lg">
                    Untuk informasi lebih lanjut atau pertanyaan, Anda dapat menghubungi
                    kami melalui informasi kontak di bawah ini. Kami siap membantu Anda!
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-6 text-center">
                <!-- Alamat -->
                <div class="flex-1">
                    <h2 class="text-lg lg:text-2xl font-bold text-green-700 mb-2">
                        Alamat
                    </h2>
                    <p class="text-base">
                        Jl. Rappocini Raya No.34, Makassar, Sulawesi Selatan, Indonesia
                    </p>
                </div>
                <!-- Telepon -->
                <div class="flex-1">
                    <h2 class="text-lg lg:text-2xl font-bold text-green-700 mb-2">
                        Telepon
                    </h2>
                    <p class="text-base">+62 812-3456-7890</p>
                </div>
                <!-- Email -->
                <div class="flex-1">
                    <h2 class="text-lg lg:text-2xl font-bold text-green-700 mb-2">
                        Email
                    </h2>
                    <p class="text-base">info@banksampahpelitabangsa.com</p>
                </div>
            </div>
        </div>
    </section>

    <div class="isolate bg-gray-100 px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
            aria-hidden="true"></div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-2xl lg:text-3xl font-bold tracking-tight text-primary sm:text-4xl">
                Hubungi Kami
            </h2>
            <p class="mt-2 text-base sm:text-lg leading-8 text-gray-600">
                Jika anda masi bingung terkait bangsa sampah pelita bangksa silahkan
                masukkan Data anda dibawa ini untuk menjawab pertanyaan anda
            </p>
        </div>
        <form action="#" method="POST"
            class="mx-auto mt-16 max-w-xl bg-white shadow-md p-6 rounded-lg sm:bg-transparent sm:shadow-none sm:p-0 sm:rounded-none sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Nama
                        Lengkap</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            placeholder="Masukkan nama lengkap anda"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300" />
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nama
                        Panggilan</label>
                    <div class="mt-2.5">
                        <input type="text" name="nama-panggilan" id="nama-panggilan" autocomplete="family-name"
                            placeholder="Masukkan nama panggilan anda"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Alamat</label>
                    <div class="mt-2.5">
                        <input type="text" name="company" id="company" autocomplete="organization"
                            placeholder="Masukkan alamat anda"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            placeholder="Masukkan alamat email anda"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Hp</label>
                    <div class="mt-2.5">
                        <input type="phone_number" name="phone_number" id="phone-number" autocomplete="phone_number"
                            placeholder="Masukkan nomor handphone anda"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4" placeholder="Tulis pesan yang ingin anda sampaikan disini"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-primary px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-hijau">
                    Kirim
                </button>
            </div>
        </form>
    </div>

    {{-- ! ====== Kirim text pesan end ====== --}}

    {{-- ! ====== Footer start ====== --}}
    <footer class="bg-primary text-white py-8">
        <div class="max-w-4xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold mb-4" id="about">Lainnya</h2>
                    <p class="leading-relaxed">
                        Bank Sampah Pelita Bangsa adalah sebuah organisasi yang
                        didedikasikan untuk mengelola sampah secara berkelanjutan dan
                        ramah lingkungan. Kami bekerja sama dengan masyarakat untuk
                        mengurangi limbah, meningkatkan kesadaran lingkungan, dan
                        menciptakan nilai ekonomi dari sampah yang didaur ulang. Melalui
                        pendidikan dan inovasi, kami berkomitmen untuk menciptakan
                        lingkungan yang lebih bersih dan sehat bagi generasi mendatang.
                    </p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold mb-4">Hubungi Kami</h2>
                    <ul class="leading-relaxed space-y-2">
                        <li>
                            <strong>Alamat :</strong> Jl. Rappocini Raya No.34, Makassar,
                            Sulawesi Selatan, Indonesia
                        </li>
                        <li><strong>Telepon :</strong> +62123456789</li>
                        <li><strong>Email :</strong>pelitabangsa@gmail.com</li>
                    </ul>
                </div>
            </div>
            <hr class="border-gray-600 my-8" />
            <p class="text-center text-lg">&copy; 2024 Bank Sampah Pelita Bangsa</p>
        </div>
    </footer>
    <div class="fixed bottom-4 right-4 z-50 group">
        <a href="https://wa.me/6285242537348" target="_blank" class="relative inline-block">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                class="w-16 h-16 lg:w-20 lg:h-20 " />
        </a>
    </div>
    {{-- ! ============== Footer end ======================= --}}
    {{-- ! ============== JavaScript start ======================= --}}
    <script src="{{ asset('javascript/page.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const text = "Selamat Datang Di Bank Sampah Pelita Bangsa";
            let index = 0;
            let isAdding = true;
            const speed = 100; // Typing speed in milliseconds
            const pause = 2000; // Pause before erasing in milliseconds

            function typeWriter() {
                const typingElement = document.getElementById('typing-text');

                if (isAdding) {
                    if (index < text.length) {
                        typingElement.innerHTML += text.charAt(index);
                        index++;
                        setTimeout(typeWriter, speed);
                    } else {
                        isAdding = false;
                        setTimeout(typeWriter, pause);
                    }
                } else {
                    if (index > 0) {
                        typingElement.innerHTML = text.substring(0, index - 1);
                        index--;
                        setTimeout(typeWriter, speed);
                    } else {
                        isAdding = true;
                        setTimeout(typeWriter, speed);
                    }
                }
            }

            typeWriter();
        });
    </script>
    {{-- ! ============== JavaScript end ======================= --}}
</body>

</html>
