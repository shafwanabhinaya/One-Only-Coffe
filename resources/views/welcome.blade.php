<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Only Coffee | Fine Dining & Modern Artisan Café</title>

    <!-- Google Fonts: Cormorant Garamond (Editorial Serif) & Plus Jakarta Sans (Modern Clean Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN Fallback + Custom Config -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#0e0d0b',
                            card: '#161412',
                            border: '#2a2622',
                            borderLight: '#3d3832',
                            accent: '#c5a880',
                            accentHover: '#d8bd98',
                            gold: '#d4af37',
                            cream: '#f5f2eb',
                            muted: '#9e9689',
                        }
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'Georgia', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0e0d0b;
            color: #f5f2eb;
            overflow-x: hidden;
        }

        .font-serif-luxury {
            font-family: 'Cormorant Garamond', Georgia, serif;
        }

        /* Subtle Gold Shimmer Gradient */
        .gold-gradient-text {
            background: linear-gradient(135deg, #f3e7d3 0%, #c5a880 50%, #e8d3b4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Menu dotted leader line for classic fine-dining menu style */
        .menu-leader-dots {
            flex-grow: 1;
            border-bottom: 1px dotted rgba(197, 168, 128, 0.35);
            margin: 0 12px 6px 12px;
            height: 1px;
        }

        /* Glassmorphic Navbar */
        .nav-blur {
            background: rgba(14, 13, 11, 0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0e0d0b;
        }
        ::-webkit-scrollbar-thumb {
            background: #2a2622;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #c5a880;
        }
    </style>
</head>
<body class="bg-brand-dark text-brand-cream antialiased selection:bg-brand-accent selection:text-brand-dark">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 nav-blur border-b border-brand-border/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#hero" class="flex flex-col group">
                <span class="font-serif-luxury text-2xl md:text-3xl tracking-[0.2em] font-semibold text-brand-cream group-hover:text-brand-accent transition-colors">
                    ONE ONLY
                </span>
                <span class="text-[9px] tracking-[0.35em] text-brand-accent uppercase -mt-1 font-medium">
                    Coffee & Roastery
                </span>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center space-x-8 text-xs tracking-widest uppercase text-brand-muted font-medium">
                <a href="#hero" class="hover:text-brand-accent transition-colors">Beranda</a>
                <a href="#signature" class="hover:text-brand-accent transition-colors">Signature</a>
                <a href="#menu" class="hover:text-brand-accent transition-colors">Daftar Menu</a>
                <a href="#philosophy" class="hover:text-brand-accent transition-colors">Filosofi</a>
                <a href="#visit" class="hover:text-brand-accent transition-colors">Kunjungi Kami</a>
            </nav>

            <!-- Action Button -->
            <div class="flex items-center space-x-4">
                <a href="#menu" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 text-xs font-semibold tracking-widest uppercase border border-brand-accent/70 text-brand-accent hover:bg-brand-accent hover:text-brand-dark transition-all duration-300 rounded-full shadow-sm">
                    Buku Menu
                </a>
                <a href="https://wa.me/?text=Halo%20One%20Only%20Coffee,%20saya%20ingin%20melakukan%20reservasi%20meja." target="_blank" class="inline-flex items-center justify-center px-5 py-2.5 text-xs font-semibold tracking-widest uppercase bg-brand-accent text-brand-dark hover:bg-brand-accentHover transition-all duration-300 rounded-full shadow-md">
                    Reservasi
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="relative pt-36 pb-20 md:pt-48 md:pb-32 overflow-hidden">
        <!-- Ambient Background Glows -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-[350px] h-[350px] bg-[#9e6f3b]/5 rounded-full blur-2xl pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            <!-- Badge -->
            <div class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full border border-brand-accent/30 bg-brand-card/70 text-brand-accent text-xs tracking-widest uppercase mb-8">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                <span>Fine Dining & Modern Café Experience</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-serif-luxury text-4xl sm:text-6xl md:text-7xl lg:text-8xl tracking-tight leading-[1.08] font-normal mb-8">
                Seni Secangkir Rasa dalam <br class="hidden sm:inline">
                <span class="italic font-serif-luxury gold-gradient-text font-light">Kesederhanaan yang Elegan.</span>
            </h1>

            <!-- Subtitle -->
            <p class="max-w-2xl mx-auto text-brand-muted text-sm sm:text-base md:text-lg leading-relaxed font-light mb-12">
                Menghadirkan keharmonisan biji kopi kurasi dan minuman racikan khas dalam estetika modern yang tenang. Setiap sajian dirancang untuk menghormati momen Anda.
            </p>

            <!-- CTAs -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
                <a href="#menu" class="w-full sm:w-auto px-8 py-4 bg-brand-accent text-brand-dark font-semibold text-xs tracking-widest uppercase rounded-full hover:bg-brand-accentHover transition-all duration-300 shadow-lg hover:shadow-brand-accent/20">
                    Jelajahi {{ $menus->count() }} Menu Kami
                </a>
                <a href="#signature" class="w-full sm:w-auto px-8 py-4 border border-brand-borderLight text-brand-cream font-medium text-xs tracking-widest uppercase rounded-full hover:border-brand-accent hover:text-brand-accent transition-all duration-300">
                    Koleksi Signature
                </a>
            </div>

            <!-- Stats/Highlights Strip -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-16 md:pt-24 border-t border-brand-border/60 mt-16 max-w-4xl mx-auto">
                <div>
                    <div class="font-serif-luxury text-3xl md:text-4xl text-brand-accent font-light">{{ $menus->count() }}</div>
                    <div class="text-[11px] tracking-widest uppercase text-brand-muted mt-1">Pilihan Menu</div>
                </div>
                <div>
                    <div class="font-serif-luxury text-3xl md:text-4xl text-brand-accent font-light">7</div>
                    <div class="text-[11px] tracking-widest uppercase text-brand-muted mt-1">Kategori Khusus</div>
                </div>
                <div>
                    <div class="font-serif-luxury text-3xl md:text-4xl text-brand-accent font-light">100%</div>
                    <div class="text-[11px] tracking-widest uppercase text-brand-muted mt-1">Artisan Quality</div>
                </div>
                <div>
                    <div class="font-serif-luxury text-3xl md:text-4xl text-brand-accent font-light">Est. 2024</div>
                    <div class="text-[11px] tracking-widest uppercase text-brand-muted mt-1">Modern Resto Bar</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Signature Showcase Section -->
    <section id="signature" class="py-24 bg-brand-card/40 border-y border-brand-border/80 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs tracking-[0.3em] text-brand-accent uppercase font-semibold">The Masterpiece Selection</span>
                <h2 class="font-serif-luxury text-3xl sm:text-5xl tracking-tight mt-2 font-normal">
                    Koleksi <span class="italic text-brand-accent">Signature</span>
                </h2>
                <p class="text-brand-muted text-sm mt-4 font-light">
                    Karya racikan orisinal barista One Only Coffee yang memadukan profil rasa unik dan tak terlupakan.
                </p>
                <div class="w-12 h-px bg-brand-accent/50 mx-auto mt-6"></div>
            </div>

            <!-- Signature Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($signatureMenus as $sig)
                <div class="group relative bg-brand-card border border-brand-border rounded-xl p-7 hover:border-brand-accent/60 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between shadow-sm hover:shadow-xl hover:shadow-black/60">
                    <!-- Subtle Glow -->
                    <div class="absolute top-0 right-0 w-24 h-24 bg-brand-accent/5 rounded-full blur-xl group-hover:bg-brand-accent/15 transition-all"></div>

                    <div>
                        <!-- Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-[10px] tracking-widest uppercase text-brand-accent border border-brand-accent/30 px-2.5 py-1 rounded-full">
                                Signature
                            </span>
                            <span class="text-xs font-serif-luxury italic text-brand-muted">Craft Blend</span>
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif-luxury text-2xl font-normal text-brand-cream group-hover:text-brand-accent transition-colors leading-snug">
                            {{ $sig->name }}
                        </h3>

                        <!-- Description -->
                        <p class="text-brand-muted text-xs leading-relaxed mt-3 font-light">
                            {{ $sig->description }}
                        </p>
                    </div>

                    <!-- Price & CTA -->
                    <div class="pt-6 mt-6 border-t border-brand-border/60 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] uppercase tracking-wider text-brand-muted block">Harga</span>
                            <span class="font-serif-luxury text-xl font-semibold text-brand-accent">
                                Rp {{ number_format($sig->price, 0, ',', '.') }}
                            </span>
                        </div>
                        <a href="https://wa.me/?text=Halo%20One%20Only%20Coffee,%20saya%20ingin%20memesan%20{{ urlencode($sig->name) }}%20(Rp%20{{ number_format($sig->price, 0, ',', '.') }})" target="_blank" class="px-3.5 py-1.5 text-[11px] tracking-wider uppercase font-semibold text-brand-cream hover:text-brand-dark bg-brand-borderLight/40 hover:bg-brand-accent rounded-full transition-all duration-300">
                            Pesan
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Complete Menu Section -->
    <section id="menu" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 border-b border-brand-border pb-8 gap-6">
                <div>
                    <span class="text-xs tracking-[0.3em] text-brand-accent uppercase font-semibold">Buku Menu Eksklusif</span>
                    <h2 class="font-serif-luxury text-4xl sm:text-5xl tracking-tight mt-2 font-normal">
                        Daftar Menu <span class="italic text-brand-accent">Lengkap</span>
                    </h2>
                    <p class="text-brand-muted text-sm mt-2 font-light">
                        Pilihan sajian kopi artisan, seduhan teh beraroma, racikan susu kaya rasa, dan soda menyegarkan.
                    </p>
                </div>

                <!-- View Toggle (Classic List vs Grid) -->
                <div class="flex items-center space-x-2 bg-brand-card border border-brand-border p-1 rounded-lg self-start md:self-auto">
                    <button id="viewListBtn" onclick="switchView('list')" class="px-3 py-1.5 text-xs rounded font-medium transition-all text-brand-cream bg-brand-border" title="Tampilan Menu Klasik (Fine Dining)">
                        <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        Menu Klasik
                    </button>
                    <button id="viewGridBtn" onclick="switchView('grid')" class="px-3 py-1.5 text-xs rounded font-medium transition-all text-brand-muted hover:text-brand-cream" title="Tampilan Kartu Modern">
                        <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        Kartu Modern
                    </button>
                </div>
            </div>

            <!-- Controls: Search & Category Filter Pills -->
            <div class="mb-12 space-y-6">
                <!-- Search Input Bar -->
                <div class="relative max-w-md">
                    <input 
                        type="text" 
                        id="menuSearch" 
                        onkeyup="filterMenuItems()" 
                        placeholder="Cari menu favorit Anda (misal: Latte, Matcha, Mojito)..." 
                        class="w-full bg-brand-card/80 border border-brand-border focus:border-brand-accent text-sm text-brand-cream rounded-full px-5 py-3.5 pl-11 outline-none transition-colors placeholder:text-brand-muted/60"
                    >
                    <svg class="w-4 h-4 text-brand-muted absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <button id="clearSearchBtn" onclick="clearSearch()" class="hidden absolute right-4 top-1/2 -translate-y-1/2 text-xs text-brand-muted hover:text-brand-cream">
                        Hapus
                    </button>
                </div>

                <!-- Category Filters Horizontal Scroll -->
                <div class="flex items-center gap-2 overflow-x-auto pb-2 scrollbar-none text-xs">
                    <button 
                        class="category-tab active-tab px-4 py-2 rounded-full border border-brand-accent bg-brand-accent text-brand-dark font-semibold tracking-wider whitespace-nowrap transition-all"
                        onclick="selectCategory('all', this)"
                    >
                        Semua Menu ({{ $menus->count() }})
                    </button>

                    @foreach ($categories as $cat)
                        @php
                            $catCount = $menus->where('category', $cat)->count();
                        @endphp
                        <button 
                            class="category-tab px-4 py-2 rounded-full border border-brand-border bg-brand-card text-brand-muted hover:text-brand-cream hover:border-brand-borderLight font-medium tracking-wider whitespace-nowrap transition-all"
                            onclick="selectCategory('{{ $cat }}', this)"
                        >
                            {{ $cat }} ({{ $catCount }})
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Empty State -->
            <div id="noResults" class="hidden py-16 text-center border border-dashed border-brand-border rounded-xl">
                <p class="font-serif-luxury text-2xl text-brand-muted">Menu yang Anda cari tidak ditemukan.</p>
                <p class="text-xs text-brand-muted mt-2">Silakan coba kata kunci lain atau pilih kategori yang tersedia.</p>
                <button onclick="resetFilters()" class="mt-5 px-5 py-2 text-xs uppercase tracking-widest bg-brand-card border border-brand-border text-brand-accent rounded-full hover:bg-brand-accent hover:text-brand-dark transition-all">
                    Reset Pencarian
                </button>
            </div>

            <!-- CONTAINER: Classic Fine-Dining List View (Default) -->
            <div id="classicListView" class="space-y-16">
                @foreach ($groupedMenus as $category => $items)
                <div class="category-block" data-category="{{ $category }}">
                    <!-- Category Title Header -->
                    <div class="flex items-center justify-between border-b border-brand-border/70 pb-3 mb-8">
                        <div class="flex items-center space-x-3">
                            <span class="w-2 h-2 rounded-full bg-brand-accent"></span>
                            <h3 class="font-serif-luxury text-2xl sm:text-3xl text-brand-cream font-normal tracking-wide">
                                {{ $category }}
                            </h3>
                        </div>
                        <span class="text-xs tracking-widest uppercase text-brand-muted">
                            {{ $items->count() }} Pilihan
                        </span>
                    </div>

                    <!-- Items Grid: 2 Columns for List -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-8">
                        @foreach ($items as $menu)
                        <div class="menu-item-row group flex flex-col justify-between py-2 transition-all hover:bg-brand-card/30 rounded-lg px-2 -mx-2" data-name="{{ strtolower($menu->name) }}" data-category="{{ $menu->category }}" data-desc="{{ strtolower($menu->description) }}">
                            <div class="flex items-baseline justify-between w-full">
                                <span class="font-serif-luxury text-xl sm:text-2xl text-brand-cream group-hover:text-brand-accent transition-colors font-medium">
                                    {{ $menu->name }}
                                </span>
                                <div class="menu-leader-dots hidden sm:block"></div>
                                <span class="font-serif-luxury text-lg sm:text-xl text-brand-accent font-semibold ml-auto whitespace-nowrap pl-4">
                                    Rp {{ number_format($menu->price, 0, ',', '.') }}
                                </span>
                            </div>
                            <div class="flex items-center justify-between mt-1.5">
                                <p class="text-brand-muted text-xs font-light max-w-md pr-4 leading-relaxed">
                                    {{ $menu->description }}
                                </p>
                                <a href="https://wa.me/?text=Halo%20One%20Only%20Coffee,%20saya%20ingin%20memesan%20{{ urlencode($menu->name) }}%20(Rp%20{{ number_format($menu->price, 0, ',', '.') }})" target="_blank" class="opacity-0 group-hover:opacity-100 transition-opacity text-[10px] tracking-wider uppercase font-semibold text-brand-accent hover:underline flex items-center space-x-1 whitespace-nowrap">
                                    <span>Pesan</span>
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <!-- CONTAINER: Modern Card Grid View -->
            <div id="cardGridView" class="hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($menus as $menu)
                <div class="menu-card-item bg-brand-card border border-brand-border rounded-xl p-6 hover:border-brand-accent/50 transition-all duration-300 flex flex-col justify-between shadow-sm group" data-name="{{ strtolower($menu->name) }}" data-category="{{ $menu->category }}" data-desc="{{ strtolower($menu->description) }}">
                    <div>
                        <div class="flex items-center justify-between text-xs mb-3">
                            <span class="text-[10px] uppercase tracking-wider text-brand-accent px-2 py-0.5 rounded bg-brand-border/60">
                                {{ $menu->category }}
                            </span>
                            <span class="font-serif-luxury text-brand-muted text-xs">One Only</span>
                        </div>
                        <h4 class="font-serif-luxury text-2xl text-brand-cream group-hover:text-brand-accent transition-colors">
                            {{ $menu->name }}
                        </h4>
                        <p class="text-brand-muted text-xs leading-relaxed mt-2.5 font-light">
                            {{ $menu->description }}
                        </p>
                    </div>

                    <div class="pt-5 mt-5 border-t border-brand-border/60 flex items-center justify-between">
                        <span class="font-serif-luxury text-xl font-semibold text-brand-accent">
                            Rp {{ number_format($menu->price, 0, ',', '.') }}
                        </span>
                        <a href="https://wa.me/?text=Halo%20One%20Only%20Coffee,%20saya%20ingin%20memesan%20{{ urlencode($menu->name) }}%20(Rp%20{{ number_format($menu->price, 0, ',', '.') }})" target="_blank" class="px-3.5 py-1.5 text-[11px] tracking-wider uppercase font-medium text-brand-cream hover:text-brand-dark bg-brand-borderLight/30 hover:bg-brand-accent rounded-full transition-all duration-300">
                            Pesan
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Philosophy & Craft Section -->
    <section id="philosophy" class="py-24 bg-brand-card/30 border-t border-brand-border relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Narrative -->
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-xs tracking-[0.3em] text-brand-accent uppercase font-semibold">Filosofi Kami</span>
                    <h2 class="font-serif-luxury text-3xl sm:text-5xl tracking-tight leading-tight font-normal">
                        Kualitas Tanpa Kompromi, <br>
                        <span class="italic text-brand-accent">Ketenangan dalam Setiap Teguk.</span>
                    </h2>
                    <p class="text-brand-muted text-sm leading-relaxed font-light">
                        Di One Only Coffee, kami meyakini bahwa secangkir kopi lebih dari sekadar asupan kafein. Ia adalah dialog hening antara penikmat dan rasa, diciptakan dengan kehati-hatian, dedikasi tinggi, dan keramahan modern.
                    </p>
                    <div class="pt-4">
                        <div class="font-serif-luxury italic text-xl text-brand-cream">
                            “Where minimal design meets maximum craftsmanship.”
                        </div>
                        <span class="text-xs tracking-widest text-brand-accent uppercase mt-1 block">— Barista & Culinary Team</span>
                    </div>
                </div>

                <!-- Right Feature Cards -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="p-6 bg-brand-card border border-brand-border rounded-xl space-y-3">
                        <div class="w-10 h-10 rounded-full border border-brand-accent/40 flex items-center justify-center text-brand-accent font-serif-luxury text-lg">
                            01
                        </div>
                        <h4 class="font-serif-luxury text-xl text-brand-cream">Single Origin & Blends</h4>
                        <p class="text-brand-muted text-xs leading-relaxed font-light">
                            Pemilihan biji kopi terbaik dari perkebunan terpilih dengan profil sangrai yang optimal.
                        </p>
                    </div>

                    <div class="p-6 bg-brand-card border border-brand-border rounded-xl space-y-3">
                        <div class="w-10 h-10 rounded-full border border-brand-accent/40 flex items-center justify-center text-brand-accent font-serif-luxury text-lg">
                            02
                        </div>
                        <h4 class="font-serif-luxury text-xl text-brand-cream">Artisan Precision</h4>
                        <p class="text-brand-muted text-xs leading-relaxed font-light">
                            Kombinasi gramasi presisi, suhu air stabil, dan waktu ekstraksi demi konsistensi rasa.
                        </p>
                    </div>

                    <div class="p-6 bg-brand-card border border-brand-border rounded-xl space-y-3">
                        <div class="w-10 h-10 rounded-full border border-brand-accent/40 flex items-center justify-center text-brand-accent font-serif-luxury text-lg">
                            03
                        </div>
                        <h4 class="font-serif-luxury text-xl text-brand-cream">Fine Dining Vibe</h4>
                        <p class="text-brand-muted text-xs leading-relaxed font-light">
                            Atmosfer minimalis berkelas yang menunjang perbincangan intim maupun saat bekerja santai.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visit & Operational Hours Section -->
    <section id="visit" class="py-24 border-t border-brand-border relative">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-gradient-to-b from-brand-card to-brand-card/60 border border-brand-border rounded-2xl p-8 sm:p-14 text-center relative overflow-hidden shadow-2xl">
                <div class="absolute -top-24 -right-24 w-60 h-60 bg-brand-accent/10 rounded-full blur-3xl pointer-events-none"></div>

                <span class="text-xs tracking-[0.3em] text-brand-accent uppercase font-semibold">Reservasi & Kunjungan</span>
                <h2 class="font-serif-luxury text-3xl sm:text-5xl font-normal mt-2">
                    Ruang Hangat untuk <span class="italic text-brand-accent">Momen Terbaik Anda</span>
                </h2>
                <p class="text-brand-muted text-sm max-w-xl mx-auto mt-4 font-light">
                    Kami siap menyambut Anda setiap hari untuk bersantai, mengadakan jamuan kopi, maupun pertemuan spesial.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto mt-12 text-left">
                    <div class="p-5 border border-brand-border/80 rounded-xl bg-brand-dark/40">
                        <span class="text-xs uppercase tracking-widest text-brand-accent block mb-1">Jam Buka</span>
                        <div class="font-serif-luxury text-xl text-brand-cream">Senin – Minggu</div>
                        <div class="text-xs text-brand-muted mt-1">08:00 – 22:00 WIB</div>
                    </div>

                    <div class="p-5 border border-brand-border/80 rounded-xl bg-brand-dark/40">
                        <span class="text-xs uppercase tracking-widest text-brand-accent block mb-1">Kapasitas</span>
                        <div class="font-serif-luxury text-xl text-brand-cream">Indoor & Semi-Outdoor</div>
                        <div class="text-xs text-brand-muted mt-1">Area nyaman & Wi-Fi cepat</div>
                    </div>

                    <div class="p-5 border border-brand-border/80 rounded-xl bg-brand-dark/40">
                        <span class="text-xs uppercase tracking-widest text-brand-accent block mb-1">Pelayanan</span>
                        <div class="font-serif-luxury text-xl text-brand-cream">Dine-in & Takeaway</div>
                        <div class="text-xs text-brand-muted mt-1">Kemasan reguler & 1 Liter</div>
                    </div>
                </div>

                <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="https://wa.me/?text=Halo%20One%20Only%20Coffee,%20saya%20ingin%20reservasi%20tempat%20untuk%20acara/kunjungan." target="_blank" class="w-full sm:w-auto px-8 py-4 bg-brand-accent text-brand-dark font-semibold text-xs tracking-widest uppercase rounded-full hover:bg-brand-accentHover transition-all shadow-md">
                        Hubungi via WhatsApp
                    </a>
                    <a href="#menu" class="w-full sm:w-auto px-8 py-4 border border-brand-borderLight text-brand-cream font-medium text-xs tracking-widest uppercase rounded-full hover:border-brand-accent transition-all">
                        Kembali ke Menu
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Refined Minimalist Footer -->
    <footer class="border-t border-brand-border py-12 bg-brand-dark">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex flex-col items-center md:items-start">
                <span class="font-serif-luxury text-2xl tracking-[0.2em] font-semibold text-brand-cream">
                    ONE ONLY
                </span>
                <span class="text-[9px] tracking-[0.3em] text-brand-accent uppercase font-medium">
                    Modern Coffee Experience
                </span>
            </div>

            <div class="flex items-center space-x-6 text-xs tracking-widest uppercase text-brand-muted">
                <a href="#hero" class="hover:text-brand-accent transition-colors">Beranda</a>
                <a href="#signature" class="hover:text-brand-accent transition-colors">Signature</a>
                <a href="#menu" class="hover:text-brand-accent transition-colors">Menu</a>
                <a href="#visit" class="hover:text-brand-accent transition-colors">Kontak</a>
            </div>

            <div class="text-xs text-brand-muted font-light">
                &copy; {{ date('Y') }} One Only Coffee. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Client-side Interactive Filter Script -->
    <script>
        let currentCategory = 'all';
        let currentView = 'list';

        function switchView(view) {
            currentView = view;
            const listContainer = document.getElementById('classicListView');
            const gridContainer = document.getElementById('cardGridView');
            const listBtn = document.getElementById('viewListBtn');
            const gridBtn = document.getElementById('viewGridBtn');

            if (view === 'list') {
                listContainer.classList.remove('hidden');
                gridContainer.classList.add('hidden');
                listBtn.classList.add('text-brand-cream', 'bg-brand-border');
                listBtn.classList.remove('text-brand-muted');
                gridBtn.classList.add('text-brand-muted');
                gridBtn.classList.remove('text-brand-cream', 'bg-brand-border');
            } else {
                listContainer.classList.add('hidden');
                gridContainer.classList.remove('hidden');
                gridBtn.classList.add('text-brand-cream', 'bg-brand-border');
                gridBtn.classList.remove('text-brand-muted');
                listBtn.classList.add('text-brand-muted');
                listBtn.classList.remove('text-brand-cream', 'bg-brand-border');
            }
            filterMenuItems();
        }

        function selectCategory(cat, btn) {
            currentCategory = cat;
            document.querySelectorAll('.category-tab').forEach(el => {
                el.classList.remove('bg-brand-accent', 'text-brand-dark', 'font-semibold', 'border-brand-accent');
                el.classList.add('bg-brand-card', 'text-brand-muted', 'border-brand-border');
            });

            btn.classList.remove('bg-brand-card', 'text-brand-muted', 'border-brand-border');
            btn.classList.add('bg-brand-accent', 'text-brand-dark', 'font-semibold', 'border-brand-accent');

            filterMenuItems();
        }

        function clearSearch() {
            const input = document.getElementById('menuSearch');
            input.value = '';
            document.getElementById('clearSearchBtn').classList.add('hidden');
            filterMenuItems();
        }

        function resetFilters() {
            document.getElementById('menuSearch').value = '';
            document.getElementById('clearSearchBtn').classList.add('hidden');
            const firstTab = document.querySelector('.category-tab');
            if (firstTab) {
                selectCategory('all', firstTab);
            }
        }

        function filterMenuItems() {
            const query = document.getElementById('menuSearch').value.toLowerCase().trim();
            const clearBtn = document.getElementById('clearSearchBtn');
            if (query.length > 0) {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
            }

            let visibleCount = 0;

            if (currentView === 'list') {
                const categoryBlocks = document.querySelectorAll('.category-block');

                categoryBlocks.forEach(block => {
                    const blockCategory = block.getAttribute('data-category');
                    const categoryMatches = (currentCategory === 'all' || currentCategory === blockCategory);
                    const rows = block.querySelectorAll('.menu-item-row');
                    let blockVisibleRows = 0;

                    rows.forEach(row => {
                        const name = row.getAttribute('data-name') || '';
                        const desc = row.getAttribute('data-desc') || '';
                        const textMatches = !query || name.includes(query) || desc.includes(query);

                        if (categoryMatches && textMatches) {
                            row.style.display = 'flex';
                            blockVisibleRows++;
                            visibleCount++;
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    if (blockVisibleRows > 0) {
                        block.style.display = 'block';
                    } else {
                        block.style.display = 'none';
                    }
                });
            } else {
                // Grid View
                const cards = document.querySelectorAll('.menu-card-item');

                cards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    const name = card.getAttribute('data-name') || '';
                    const desc = card.getAttribute('data-desc') || '';

                    const categoryMatches = (currentCategory === 'all' || currentCategory === cardCategory);
                    const textMatches = !query || name.includes(query) || desc.includes(query);

                    if (categoryMatches && textMatches) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            const noResults = document.getElementById('noResults');
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
