@extends('layouts.app')

@section('content')
    <section class="relative bg-emerald-700 text-white py-24 overflow-hidden">
        {{-- Shape dekoratif --}}
        <div class="absolute -top-24 -left-24 w-72 h-72 bg-violet-300 opacity-20 rounded-full blur-2xl z-0"></div>
        <div class="absolute -bottom-16 -right-16 w-60 h-60 bg-orange-600 opacity-30 rounded-full blur-2xl z-0"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-8">
            {{-- Ikon Sekolah --}}
            <div class="text-6xl md:text-7xl text-white bg-white/10 p-6 rounded-full border-2 border-white/30 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path
                        d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                    <path
                        d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                    <path
                        d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                </svg>

            </div>

            {{-- Teks Judul --}}
            <div class="md:text-left text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Profil Sekolah</h1>
                <p class="text-white/90 text-lg max-w-xl">
                    SD Al-Fatah 2 Ambon adalah lembaga pendidikan dasar berbasis Islam modern yang membentuk karakter dan
                    kecerdasan siswa dalam lingkungan yang nyaman dan Islami.
                </p>
            </div>
        </div>
    </section>


    {{-- KONTEN PROFIL --}}
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold text-emerald-700 mb-4">Tentang Kami</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    SD Al-Fatah 2 Ambon adalah sekolah dasar Islam modern yang menggabungkan pendidikan umum dan agama dalam
                    suasana yang kondusif dan menyenangkan.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Didirikan dengan tujuan membentuk generasi Qur’ani yang cerdas, berakhlak mulia, serta berwawasan
                    global, kami menyediakan berbagai kegiatan belajar mengajar serta ekstrakurikuler untuk mendukung
                    potensi siswa.
                </p>
            </div>
            <div>
                <img src="{{ asset('img/ibu1.jpg') }}" alt="Gedung Sekolah"
                    class="rounded-xl shadow-lg w-full h-auto object-cover">
            </div>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section class="bg-gray-100 py-16">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-emerald-700 mb-6">Visi & Misi</h2>
            <div class="text-left space-y-6">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Visi</h3>
                    <p class="text-gray-700">
                        Menjadi sekolah dasar Islam unggulan dalam membentuk generasi Qur’ani yang berprestasi dan berakhlak
                        mulia.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Misi</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Mengembangkan potensi akademik dan spiritual siswa secara seimbang</li>
                        <li>Membiasakan siswa dengan nilai-nilai Islami dalam kehidupan sehari-hari</li>
                        <li>Mendorong kreativitas, kedisiplinan, dan kepedulian sosial</li>
                        <li>Menggunakan metode pembelajaran yang inovatif dan menyenangkan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- LOKASI SEKOLAH --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-emerald-700 mb-6">Lokasi Sekolah</h2>
            <p class="text-gray-700 mb-6">Kunjungi SD Al-Fatah 02 Ambon di lokasi berikut:</p>

            <div class="w-full h-[400px] rounded-lg shadow-lg overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.519373828319!2d128.17733479999998!3d-3.6961353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce83f8b9dfa85%3A0x90b31471f373a763!2sSD%20Al-Fatah%2002%20Ambon!5e0!3m2!1sid!2sid!4v1749907043038!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>


@endsection