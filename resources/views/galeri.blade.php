@extends('layouts.app')

@section('content')

{{-- HEADER GALERI DENGAN LATAR EMERALD --}}
<section class="relative bg-emerald-700 text-white py-24 overflow-hidden">
    {{-- Ornamen melingkar --}}
    <div class="absolute -top-24 -left-24 w-72 h-72 bg-violet-300 opacity-20 rounded-full blur-2xl z-0"></div>
    <div class="absolute -bottom-16 -right-16 w-60 h-60 bg-orange-600 opacity-30 rounded-full blur-2xl z-0"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-8">
        {{-- Ikon Galeri --}}
        <div class="text-6xl md:text-7xl text-white bg-white/10 p-6 rounded-full border-2 border-white/30 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd"
                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                    clip-rule="evenodd" />
            </svg>
        </div>

        {{-- Judul & Deskripsi --}}
        <div class="md:text-left text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Galeri Sekolah</h1>
            <p class="text-white/90 text-lg max-w-xl">
                Dokumentasi kegiatan siswa, momen spesial, dan suasana lingkungan SD Al-Fatah 2 Ambon.
            </p>
        </div>
    </div>
</section>




    {{-- GALERI --}}
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                @foreach (range(1, 12) as $i)
                    <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition-all">
                        <img src="https://source.unsplash.com/400x300/?school,student,activity,{{ $i }}"
                            alt="Galeri {{ $i }}" class="w-full h-48 object-cover">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
