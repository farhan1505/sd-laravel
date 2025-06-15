@extends('layouts.app')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative h-[90vh] md:h-screen overflow-hidden flex items-center">
        {{-- Background Image --}}
        <img src="{{ asset('img/upacara.jpg') }}" alt="Foto Sekolah"
            class="absolute inset-0 w-full h-full object-cover brightness-70" />

        {{-- Gradasi lapisan agar teks terlihat --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/30 to-transparent"></div>

        {{-- Teks Konten --}}
        <div class="relative z-10 max-w-4xl px-6 md:px-16 text-left text-white">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-green-600">
                    SD Al-Fatah 2 Ambon
                </span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-md">
                Sekolah Islam modern berbasis Qur’an dan teknologi yang membentuk karakter generasi unggul.
            </p>
            <a href="/profil"
                class="inline-block mt-6 bg-white text-green-700 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-200 transition">
                Lihat Profil Sekolah
            </a>
        </div>
    </section>

    {{-- PROFIL SINGKAT --}}
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 text-green-700 ">Profil Singkat</h2>
            <p class="text-gray-700 text-lg max-w-3xl mx-auto">
                SD Al-Fatah 2 adalah sekolah dasar Islam terpadu yang berkomitmen untuk membentuk generasi yang berakhlak
                mulia, cerdas, dan cinta Al-Qur'an. Terletak di lingkungan yang asri dan kondusif, sekolah kami menjadi
                pilihan terbaik untuk pendidikan dasar anak Anda.
            </p>
        </div>
    </section>

    {{-- BERITA TERBARU (dummy dulu) --}}
    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-10">Berita Terbaru</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @for($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg ">
                        <img src="{{ asset('img/ibu1.jpg') }}" class="rounded mb-4"
                            alt="Berita {{ $i }}">
                        <h3 class="font-bold text-lg mb-2">Judul Berita {{ $i }}</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat berita ke-{{ $i }}. Klik untuk baca selengkapnya.</p>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- EKSTRAKURIKULER --}}
    <section class="bg-gray-50 py-16" id="ekstrakurikuler">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-green-700 mb-10 ">Ekstrakurikuler</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow hover:shadow-md p-6  ">
                    <img src="{{ asset('img/karate.jpg') }}" alt="Karate" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-green-700">Karate</h3>
                    <p class="text-gray-600 text-sm mt-2">Melatih kedisiplinan dan ketahanan fisik sejak dini.</p>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-md p-6  ">
                    <img src="{{ asset('img/ukulele.jpg') }}" alt="Ukulele" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-green-700">Ukulele</h3>
                    <p class="text-gray-600 text-sm mt-2">Mengembangkan bakat seni dan musikalitas anak-anak.</p>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-md p-6  ">
                    <img src="{{ asset('img/pramuka.jpg') }}" alt="Pramuka" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-green-700">Pramuka</h3>
                    <p class="text-gray-600 text-sm mt-2">Membentuk jiwa kepemimpinan dan kerjasama dalam tim.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- GALERI MINI --}}
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-10">Galeri Kegiatan</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @for($j = 1; $j <= 8; $j++)
                    <img src="{{ asset('img/anakanak1.jpg') }}" class="rounded-lg shadow animate-slideRight" alt="Galeri {{ $j }}">
                @endfor
            </div>
        </div>
    </section>

    {{-- CTA KE KONTAK --}}
    <section class="bg-green-700 py-16 text-white text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 ">Pendaftaran Siswa Baru Telah Dibuka</h2>
        <p class="text-lg mb-6">Gabung bersama SD Al-Fatah 2, tempat terbaik untuk tumbuh dan belajar!</p>
        <a href="/kontak"
            class="bg-white text-green-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 ">Hubungi
            Kami</a>
    </section>
@endsection