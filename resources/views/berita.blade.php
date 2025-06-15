@extends('layouts.app')

@section('content')
    <section class="relative bg-emerald-700 text-white py-24 overflow-hidden">
        {{-- Shape dekoratif --}}
        <div class="absolute -top-24 -left-24 w-72 h-72 bg-violet-300 opacity-20 rounded-full blur-2xl z-0"></div>
        <div class="absolute -bottom-16 -right-16 w-60 h-60 bg-orange-600 opacity-30 rounded-full blur-2xl z-0"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-8">
            {{-- Ikon Berita --}}
            <div class="text-6xl md:text-7xl text-white bg-white/10 p-6 rounded-full border-2 border-white/30 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                        clip-rule="evenodd" />
                    <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
                </svg>
            </div>

            {{-- Teks Judul --}}
            <div class="md:text-left text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Berita & Informasi</h1>
                <p class="text-white/90 text-lg max-w-xl">
                    Simak berita terbaru, pengumuman penting, dan dokumentasi kegiatan dari SD Al-Fatah 2 Ambon.
                </p>
            </div>
        </div>
    </section>




    {{-- BERITA LIST --}}
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="bg-gray-50 rounded-xl shadow hover:shadow-xl transition duration-300">
                        <img src="https://source.unsplash.com/400x250/?school,education,{{ $i }}" alt="Berita {{ $i }}"
                            class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-5">
                            <h3 class="font-semibold text-lg mb-2 text-emerald-700">Judul Berita {{ $i }}</h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Ringkasan berita singkat ke-{{ $i }} yang menggambarkan aktivitas sekolah, acara, atau
                                pengumuman penting.
                            </p>
                            <a href="#" class="text-emerald-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection