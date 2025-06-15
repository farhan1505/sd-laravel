<!-- Navbar -->
<nav class="fixed top-0 w-full z-50 bg-transparent transition-all duration-300" id="navbar">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-4 py-3">
        <div class="text-white font-bold text-xl" id="nav-title">SD Al-Fatah 2</div>

        <button id="menu-toggle" class="text-white md:hidden">
            <!-- SVG hamburger -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>


        <!-- Desktop Menu -->
        <div id="nav-links" class="hidden md:flex space-x-6 text-white">
            <a href="/" class="hover:text-emerald-300">Beranda</a>
            <a href="/profil" class="hover:text-emerald-300">Profil</a>
            <a href="/berita" class="hover:text-emerald-300">Berita</a>
            <a href="/galeri" class="hover:text-emerald-300">Galeri</a>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu"
        class="hidden absolute right-4 mt-2 w-40 bg-white text-gray-800 rounded-md shadow-lg py-2 md:hidden">
        <a href="/" class="block px-4 py-2 hover:bg-emerald-100">Beranda</a>
        <a href="/profil" class="block px-4 py-2 hover:bg-emerald-100">Profil</a>
        <a href="/berita" class="block px-4 py-2 hover:bg-emerald-100">Berita</a>
        <a href="/galeri" class="block px-4 py-2 hover:bg-emerald-100">Galeri</a>
    </div>
</nav>