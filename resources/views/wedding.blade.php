<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard & Peace - We're Getting Married!</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/ripe-logo.jpeg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Screen reader only class for accessibility */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only:focus {
            position: static;
            width: auto;
            height: auto;
            padding: inherit;
            margin: inherit;
            overflow: visible;
            clip: auto;
            white-space: normal;
        }

        /* Scroll animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Confetti animation */
        @keyframes confetti-fall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(100vh) rotate(720deg);
                opacity: 0;
            }
        }

        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            z-index: 100;
            pointer-events: none;
        }
    </style>
</head>

<body class="font-sans antialiased bg-white text-gray-800 overflow-hidden" x-data="{
    loading: true,
    showNav: false,
    showBackToTop: false,
    musicPlaying: false,
    lightboxOpen: false,
    currentLightboxImage: '',
    scrollPosition: 0
}"
    x-init="setTimeout(() => {
        loading = false;
        setTimeout(() => {
            musicPlaying = true;
            $refs.weddingMusic.play().catch(() => {
                // Autoplay blocked by browser, user will need to click play button
                musicPlaying = false;
            });
        }, 500);
    }, 2000);
    $watch('scrollPosition', value => showBackToTop = value > 300);">

    <!-- Loading Screen -->
    <div x-show="loading" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 bg-gradient-to-br from-emerald-900 via-emerald-800 to-emerald-900 flex items-center justify-center">
        <div class="text-center">
            <div class="relative mb-8" x-data="{ pulse: true }" x-init="setInterval(() => pulse = !pulse, 1000)">
                <img src="{{ asset('images/ripe-logo.jpeg') }}" alt="Loading"
                    class="w-24 h-24 lg:w-32 lg:h-32 rounded-full object-cover shadow-2xl ring-4 ring-gold-300/70 mx-auto transition-all duration-1000"
                    :class="pulse ? 'scale-110 ring-8' : 'scale-100 ring-4'">
            </div>
            <h2 class="font-cursive text-3xl lg:text-4xl text-white mb-3">Richard <span class="text-gold-300">&</span>
                Peace</h2>
            <div class="flex justify-center gap-2 mt-6">
                <div class="w-2 h-2 bg-gold-300 rounded-full animate-bounce" style="animation-delay: 0ms"></div>
                <div class="w-2 h-2 bg-gold-300 rounded-full animate-bounce" style="animation-delay: 150ms"></div>
                <div class="w-2 h-2 bg-gold-300 rounded-full animate-bounce" style="animation-delay: 300ms"></div>
            </div>
        </div>
    </div>

    <!-- Floating Navigation (Mobile/Tablet) -->
    <nav class="fixed top-4 right-4 z-40 lg:hidden" x-show="!loading" aria-label="Main navigation">
        <button @click="showNav = !showNav"
            class="bg-emerald-700 hover:bg-emerald-600 text-white p-3 rounded-full shadow-2xl transition-all hover:scale-110"
            aria-label="Toggle navigation menu" :aria-expanded="showNav">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!showNav"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="showNav" x-cloak
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Navigation Menu -->
        <div x-show="showNav" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" @click.away="showNav = false" x-cloak
            class="absolute top-16 right-0 bg-white rounded-2xl shadow-2xl p-4 min-w-[200px] border-2 border-emerald-100">
            <a href="#hero" @click="showNav = false"
                class="block px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-lg transition-colors font-semibold">Home</a>
            <a href="#schedule" @click="showNav = false"
                class="block px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-lg transition-colors font-semibold">Schedule</a>
            <a href="#dress" @click="showNav = false"
                class="block px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-lg transition-colors font-semibold">Dress
                Code</a>
            <a href="#rsvp" @click="showNav = false"
                class="block px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-lg transition-colors font-semibold">RSVP</a>
            <a href="#location" @click="showNav = false"
                class="block px-4 py-3 text-emerald-700 hover:bg-emerald-50 rounded-lg transition-colors font-semibold">Location</a>
        </div>
    </nav>

    <!-- Back to Top Button -->
    <button x-show="showBackToTop && !loading"
        @click="document.querySelector('#hero').scrollIntoView({ behavior: 'smooth' })"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4"
        class="fixed bottom-6 right-6 z-40 bg-emerald-700 hover:bg-emerald-600 text-white p-4 rounded-full shadow-2xl transition-all hover:scale-110 group"
        aria-label="Back to top">
        <svg class="w-6 h-6 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- Music Player Toggle -->
    <button x-show="!loading"
        @click="musicPlaying = !musicPlaying; musicPlaying ? $refs.weddingMusic.play() : $refs.weddingMusic.pause()"
        class="fixed bottom-6 left-6 z-40 bg-gold-600 hover:bg-gold-500 text-white p-4 rounded-full shadow-2xl transition-all hover:scale-110"
        :class="musicPlaying ? 'animate-pulse' : ''" aria-label="Toggle music">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" x-show="!musicPlaying">
            <path
                d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z">
            </path>
        </svg>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" x-show="musicPlaying" x-cloak>
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <audio x-ref="weddingMusic" loop>
        <source src="{{ asset('audio/wedding-music.mp3') }}" type="audio/mpeg">
    </audio>

    <!-- Image Lightbox -->
    <div x-show="lightboxOpen" @click="lightboxOpen = false" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 bg-black/95 flex items-center justify-center p-4"
        x-cloak>
        <button @click="lightboxOpen = false"
            class="absolute top-4 right-4 text-white hover:text-gold-300 transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>
        <img :src="currentLightboxImage" alt="Gallery"
            class="max-h-full max-w-full object-contain rounded-lg shadow-2xl" @click.stop>
    </div>

    <!-- Skip to Content (Accessibility) -->
    <a href="#hero"
        class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:bg-emerald-700 focus:text-white focus:px-4 focus:py-2 focus:rounded-lg">
        Skip to content
    </a>

    <!-- Split Screen Layout -->
    <div class="fixed inset-0 flex flex-col lg:flex-row" x-show="!loading"
        x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100">

        <!-- Left Side - Dynamic Image Gallery (Fixed) -->
        <div class="relative w-full lg:w-[50%] h-[70vh] lg:h-full overflow-hidden" x-data="{
            currentImage: 'couple-1.jpg',
            images: {
                'hero': 'couple-2.jpg',
                'schedule': 'couple-1.jpg',
                'dress': 'couple-3.jpg',
                'ceremony': 'couple-4.jpg',
                'registry': 'couple-1.jpg',
                'rsvp': 'couple-2.jpg',
                'qa': 'couple-3.jpg',
                'location': 'couple-4.jpg'
            }
        }"
            @scroll-section.window="currentImage = images[$event.detail] || 'couple-1.jpg'">

            <!-- Image Container with Smooth Crossfade Transitions -->
            <template x-for="(image, key) in images" :key="key">
                <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out cursor-pointer group"
                    :class="currentImage === image ? 'opacity-100 z-10' : 'opacity-0 z-0'"
                    @click="lightboxOpen = true; currentLightboxImage = `/images/${image}`">
                    <img :src="`/images/${image}`" :alt="key"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-900/70 via-emerald-800/60 to-black/70 group-hover:from-emerald-900/60 group-hover:via-emerald-800/50 group-hover:to-black/60 transition-all duration-500">
                    </div>
                    <!-- Click to view indicator -->\n <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2
                        -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300
                        pointer-events-none\">\n <div class=\"bg-white/20 backdrop-blur-sm rounded-full p-4\">\n <svg
                                class=\"w-12 h-12 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24
                                24\">\n <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                    d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7\"></path>
                                \n </svg>\n </div>\n </div>
                </div>
            </template>

            <!-- Logo Badge - Top Center -->
            <!-- Elegant Overlay Content on Image -->
            <div class="absolute inset-x-0 bottom-0 flex items-end justify-center z-20 p-4 lg:p-12 pb-8 lg:pb-20">
                <div class="text-center text-white max-w-lg">
                    <!-- Logo Badge Above Names -->
                    <div class="flex justify-center mb-3 lg:mb-6">
                        <img src="{{ asset('images/ripe-logo.jpeg') }}" alt="Richard & Peace Logo"
                            class="w-12 h-12 lg:w-24 lg:h-24 rounded-full object-cover shadow-2xl ring-2 lg:ring-4 ring-gold-300/70 ring-offset-1 lg:ring-offset-2 ring-offset-white/10">
                    </div>

                    <!-- Names -->
                    <h1
                        class="font-cursive text-2xl sm:text-3xl lg:text-6xl mb-3 lg:mb-5 drop-shadow-2xl leading-tight">
                        Richard <span class="text-gold-300">&</span> Peace
                    </h1>

                    <div
                        class="h-0.5 lg:h-1 w-16 lg:w-24 bg-gradient-to-r from-transparent via-gold-300 to-transparent mx-auto mb-3 lg:mb-5 shadow-lg">
                    </div>

                    <!-- Tagline -->
                    <p class="font-serif text-sm lg:text-2xl text-white/95 drop-shadow-lg mb-4 lg:mb-6">
                        #RipeForever2025
                    </p>

                    <!-- Wedding Date Badge -->
                    <div
                        class="inline-block bg-gradient-to-r from-gold-500/20 to-gold-600/20 backdrop-blur-md border border-gold-300/50 lg:border-2 rounded-full px-4 py-1.5 lg:px-6 lg:py-2 shadow-2xl">
                        <p class="text-gold-200 font-semibold text-sm lg:text-lg tracking-wide">
                            29 • 11 • 2025
                        </p>
                    </div>
                </div>
            </div>

            <!-- Decorative Corner Ornaments with Animation -->
            <div
                class="absolute top-8 left-8 w-16 h-16 border-t-2 border-l-2 border-gold-400/30 z-20 transition-all duration-500 hover:border-gold-400/60 hover:w-20 hover:h-20">
            </div>
            <div
                class="absolute top-8 right-8 w-16 h-16 border-t-2 border-r-2 border-gold-400/30 z-20 transition-all duration-500 hover:border-gold-400/60 hover:w-20 hover:h-20">
            </div>
            <div
                class="absolute bottom-8 left-8 w-16 h-16 border-b-2 border-l-2 border-gold-400/30 z-20 transition-all duration-500 hover:border-gold-400/60 hover:w-20 hover:h-20">
            </div>
            <div
                class="absolute bottom-8 right-8 w-16 h-16 border-b-2 border-r-2 border-gold-400/30 z-20 transition-all duration-500 hover:border-gold-400/60 hover:w-20 hover:h-20">
            </div>

            <!-- Decorative Inner Corners -->
            <div class="absolute top-24 left-24 w-8 h-8 border-t border-l border-gold-400/20 z-20"></div>
            <div class="absolute top-24 right-24 w-8 h-8 border-t border-r border-gold-400/20 z-20"></div>
            <div class="absolute bottom-24 left-24 w-8 h-8 border-b border-l border-gold-400/20 z-20"></div>
            <div class="absolute bottom-24 right-24 w-8 h-8 border-b border-r border-gold-400/20 z-20"></div>

            <!-- Scroll Indicator (Mobile Only) -->
            <div class="lg:hidden absolute bottom-2 left-1/2 -translate-x-1/2 z-20 animate-bounce">
                <svg class="w-6 h-6 text-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>

        <!-- Right Side - Scrollable Content -->
        <div class="w-full lg:w-[50%] h-2/3 lg:h-full overflow-y-auto bg-white"
            @scroll="scrollPosition = $el.scrollTop" x-ref="contentScroll">
            <div class="min-h-full">

                <!-- Hero Welcome Section -->
                <section id="hero"
                    class="min-h-screen flex items-center justify-center px-6 lg:px-12 py-20 bg-emerald-50"
                    x-data="{ show: true }" x-init="$dispatch('scroll-section', 'hero')"
                    x-intersect:enter="$dispatch('scroll-section', 'hero')">
                    <div class="max-w-2xl mx-auto text-center" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <h2
                            class="font-cursive text-4xl md:text-6xl text-emerald-700 mb-6 leading-tight tracking-wide">
                            Join Us</h2>

                        <p class="font-serif text-lg md:text-2xl text-gray-700 mb-12 leading-relaxed tracking-wide">
                            as we celebrate the beginning of our forever journey together
                        </p>

                        <!-- Elegant Date Display -->
                        <div class="flex flex-wrap justify-center gap-6 mb-14">
                            <div
                                class="bg-gradient-to-br from-white to-emerald-50 border-2 border-emerald-600 rounded-2xl p-8 shadow-xl hover:shadow-2xl hover:scale-105 hover:border-emerald-700 transition-all duration-300 cursor-default">
                                <div
                                    class="text-6xl font-bold bg-gradient-to-br from-emerald-700 to-emerald-900 bg-clip-text text-transparent mb-2">
                                    29</div>
                                <div class="text-sm uppercase tracking-widest text-gray-600">November</div>
                            </div>
                            <div
                                class="bg-white border-2 border-emerald-600 rounded-2xl p-8 shadow-xl hover:shadow-2xl hover:scale-105 hover:border-emerald-700 transition-all duration-300 cursor-default">
                                <div class="text-6xl font-bold text-emerald-700 mb-2">
                                    2025</div>
                                <div class="text-sm uppercase tracking-widest text-gray-600">Saturday</div>
                            </div>
                        </div>

                        <!-- Live Countdown Timer -->
                        <div class="bg-emerald-700 rounded-3xl p-10 shadow-2xl border border-emerald-600 relative group"
                            x-data="{
                                days: 0,
                                hours: 0,
                                minutes: 0,
                                seconds: 0,
                                isUrgent: false,
                                init() {
                                    this.updateCountdown();
                                    setInterval(() => this.updateCountdown(), 1000);
                                },
                                updateCountdown() {
                                    const wedding = new Date('2025-11-29T09:00:00').getTime();
                                    const now = new Date().getTime();
                                    const distance = wedding - now;

                                    this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                    this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                    this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    this.seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    this.isUrgent = this.days < 30;
                                }
                            }" :class="isUrgent ? 'ring-4 ring-gold-400 animate-pulse' : ''">
                            <div class="text-white text-xs uppercase tracking-widest mb-6 font-semibold opacity-90"
                                :class="isUrgent ? 'text-gold-300' : ''">
                                <span x-show="!isUrgent">Counting Down To Forever</span>
                                <span x-show="isUrgent" x-cloak>🎉 Almost Time! Less Than 30 Days! 🎉</span>
                            </div>
                            <div class="grid grid-cols-4 gap-4 text-center">
                                <div
                                    class="bg-white/10 backdrop-blur-sm rounded-xl p-4 group-hover:bg-white/20 transition-all duration-300">
                                    <div class="text-4xl lg:text-5xl font-bold text-white mb-1" x-text="days"></div>
                                    <div class="text-xs uppercase text-white/80">Days</div>
                                </div>
                                <div
                                    class="bg-white/10 backdrop-blur-sm rounded-xl p-4 group-hover:bg-white/20 transition-all duration-300">
                                    <div class="text-4xl lg:text-5xl font-bold text-white mb-1" x-text="hours"></div>
                                    <div class="text-xs uppercase text-white/80">Hours</div>
                                </div>
                                <div
                                    class="bg-white/10 backdrop-blur-sm rounded-xl p-4 group-hover:bg-white/20 transition-all duration-300">
                                    <div class="text-4xl lg:text-5xl font-bold text-white mb-1" x-text="minutes">
                                    </div>
                                    <div class="text-xs uppercase text-white/80">Min</div>
                                </div>
                                <div
                                    class="bg-white/10 backdrop-blur-sm rounded-xl p-4 group-hover:bg-white/20 transition-all duration-300">
                                    <div class="text-4xl lg:text-5xl font-bold text-white mb-1" x-text="seconds">
                                    </div>
                                    <div class="text-xs uppercase text-white/80">Sec</div>
                                </div>
                            </div>
                        </div>

                        <!-- Save to Calendar & Share Buttons -->
                        <div class="mt-12 flex flex-wrap justify-center gap-4">
                            <!-- Add to Calendar -->
                            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Richard+%26+Peace+Wedding&dates=20251129T140000Z/20251129T200000Z&details=Join+us+as+we+celebrate+the+beginning+of+our+forever+journey+together&location=Lawyer+Kpatsa+Residence,+Tanyigbe-Etoe,+Ho+-+Volta+Region"
                                target="_blank"
                                class="inline-flex items-center gap-2 bg-white border-2 border-emerald-600 text-emerald-700 hover:bg-emerald-50 px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 group">
                                <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="font-semibold">Add to Calendar</span>
                            </a>

                            <!-- Share Dropdown -->
                            <div x-data="{ shareOpen: false }" class="relative">
                                <button @click="shareOpen = !shareOpen"
                                    class="inline-flex items-center gap-2 bg-gold-600 hover:bg-gold-500 text-white px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 group">
                                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold">Share</span>
                                </button>

                                <!-- Share Menu -->
                                <div x-show="shareOpen" @click.away="shareOpen = false"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute bottom-full mb-2 right-0 bg-white rounded-xl shadow-2xl p-3 min-w-[200px] border-2 border-emerald-100"
                                    x-cloak>
                                    <a href="https://wa.me/?text=Join%20us%20for%20Richard%20%26%20Peace%27s%20Wedding!%20November%2029%2C%202025%20-%20"
                                        target="_blank"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-emerald-50 rounded-lg transition-colors group">
                                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-gray-700 group-hover:text-emerald-700 font-medium">WhatsApp</span>
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-emerald-50 rounded-lg transition-colors group">
                                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-gray-700 group-hover:text-emerald-700 font-medium">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?text=Join%20us%20for%20Richard%20%26%20Peace%27s%20Wedding!%20November%2029%2C%202025"
                                        target="_blank"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-emerald-50 rounded-lg transition-colors group">
                                        <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-gray-700 group-hover:text-emerald-700 font-medium">Twitter</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Decorative Section Divider -->
                <div
                    class="flex items-center justify-center py-4 bg-gradient-to-r from-emerald-50 via-white to-emerald-50">
                    <div class="flex items-center gap-3">
                        <div class="h-px w-12 bg-gradient-to-r from-transparent to-emerald-300"></div>
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="h-px w-12 bg-gradient-to-l from-transparent to-emerald-300"></div>
                    </div>
                </div>

                <!-- Schedule Section -->
                <section id="schedule"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'schedule')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2 class="font-cursive text-4xl md:text-5xl text-emerald-700 mb-3">
                                Our Special Day</h2>
                            <p class="text-gray-600">Timeline of celebrations</p>
                        </div>

                        <!-- Timeline -->
                        <div class="space-y-8">
                            <!-- Ceremony -->
                            <div class="flex gap-6 group" x-data="{ visible: false }" x-intersect:enter="visible = true"
                                x-transition:enter="transition ease-out duration-700 delay-100"
                                x-transition:enter-start="opacity-0 translate-x-[-50px]"
                                x-transition:enter-end="opacity-100 translate-x-0">
                                <div class="flex-shrink-0 w-24 text-right">
                                    <div class="text-2xl font-bold text-emerald-700">
                                        Part 1</div>
                                    {{--  <div class="text-sm text-gray-500">Nov 8</div>  --}}
                                </div>
                                <div class="relative flex-1">
                                    <div
                                        class="absolute left-0 top-0 w-4 h-4 rounded-full bg-gradient-to-br from-emerald-600 to-gold-500 ring-4 ring-emerald-100 shadow-lg">
                                    </div>
                                    <div
                                        class="ml-8 bg-gradient-to-br from-emerald-50 to-white rounded-xl p-6 border border-emerald-100 group-hover:shadow-xl group-hover:border-gold-200 transition-all">
                                        <h3 class="text-xl font-bold text-emerald-800 mb-2">Engagement ceremony</h3>
                                        <p class="text-gray-600">
                                            A joyful gathering to celebrate our commitment with family and friends
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Exchange of vows -->
                            <div class="flex gap-6 group" x-data="{ visible: false }" x-intersect:enter="visible = true"
                                x-transition:enter="transition ease-out duration-700 delay-200"
                                x-transition:enter-start="opacity-0 translate-x-[-50px]"
                                x-transition:enter-end="opacity-100 translate-x-0">
                                <div class="flex-shrink-0 w-24 text-right">
                                    <div class="text-2xl font-bold text-emerald-700">
                                        Part 2</div>
                                </div>
                                <div class="relative flex-1">
                                    <div
                                        class="absolute left-0 top-0 w-4 h-4 rounded-full bg-emerald-600 ring-4 ring-emerald-100 shadow-lg">
                                    </div>
                                    <div
                                        class="ml-8 bg-emerald-50 rounded-xl p-6 border border-emerald-100 group-hover:shadow-xl group-hover:border-emerald-200 transition-all">
                                        <h3 class="text-xl font-bold text-emerald-800 mb-2">Exchange of vows</h3>
                                        <p class="text-gray-600">
                                            Join us as we exchange our vows
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Marriage Registry (Private) -->
                            <div class="flex gap-6 group" x-data="{ visible: false }" x-intersect:enter="visible = true"
                                x-transition:enter="transition ease-out duration-700 delay-300"
                                x-transition:enter-start="opacity-0 translate-x-[-50px]"
                                x-transition:enter-end="opacity-100 translate-x-0">
                                <div class="flex-shrink-0 w-24 text-right">
                                    <div class="text-2xl font-bold text-emerald-700">
                                        Part 3</div>
                                </div>
                                <div class="relative flex-1">
                                    <div
                                        class="absolute left-0 top-0 w-4 h-4 rounded-full bg-gradient-to-br from-emerald-600 to-gold-500 ring-4 ring-emerald-100 shadow-lg">
                                    </div>
                                    <div
                                        class="ml-8 bg-gradient-to-br from-emerald-50 to-white rounded-xl p-6 border border-emerald-100 group-hover:shadow-xl group-hover:border-gold-200 transition-all">
                                        <h3 class="text-xl font-bold text-emerald-800 mb-2">Marriage Registry (Private)
                                        </h3>
                                        <p class="text-gray-600">
                                            Registering our marriage in an intimate ceremony with close family and
                                            friends
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Reception -->
                            <div class="flex gap-6 group" x-data="{ visible: false }" x-intersect:enter="visible = true"
                                x-transition:enter="transition ease-out duration-700 delay-400"
                                x-transition:enter-start="opacity-0 translate-x-[-50px]"
                                x-transition:enter-end="opacity-100 translate-x-0">
                                <div class="flex-shrink-0 w-24 text-right">
                                    <div class="text-2xl font-bold text-emerald-700">
                                        Part 4</div>
                                </div>
                                <div class="relative flex-1">
                                    <div
                                        class="absolute left-0 top-0 w-4 h-4 rounded-full bg-emerald-600 ring-4 ring-emerald-100 shadow-lg">
                                    </div>
                                    <div
                                        class="ml-8 bg-emerald-50 rounded-xl p-6 border border-emerald-100 group-hover:shadow-xl group-hover:border-emerald-200 transition-all">
                                        <h3 class="text-xl font-bold text-emerald-800 mb-2">Reception</h3>
                                        <p class="text-gray-600">
                                            Celebrate with us with dinner, dancing, and unforgettable memories
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Decorative Section Divider -->
                <div class="flex items-center justify-center py-4 bg-white">
                    <div class="flex items-center gap-3">
                        <div class="h-px w-12 bg-gradient-to-r from-transparent to-emerald-300"></div>
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="h-px w-12 bg-gradient-to-l from-transparent to-emerald-300"></div>
                    </div>
                </div>

                <!-- Dress Code Section -->
                <section id="dress-code"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-gradient-to-b from-emerald-50 to-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'dress')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2 class="font-cursive text-4xl md:text-5xl text-emerald-700 mb-3">
                                Dress Code</h2>
                            <p class="text-gray-600">Elegance in emerald green, gold, and white</p>
                        </div>

                        <div class="bg-white rounded-3xl shadow-2xl p-10 border border-emerald-100">
                            <p class="text-center text-gray-700 text-lg mb-10 leading-relaxed">
                                We kindly request our guests to dress in our wedding colors to create a beautiful,
                                cohesive atmosphere.
                            </p>

                            <div class="grid grid-cols-3 gap-8">
                                <!-- Emerald Green -->
                                <div class="text-center group">
                                    <div
                                        class="w-24 h-24 rounded-full bg-emerald-700 mx-auto mb-4 shadow-xl group-hover:scale-110 transition-transform ring-4 ring-emerald-100">
                                    </div>
                                    <div class="font-semibold text-emerald-800 mb-1">Emerald Green</div>
                                    <div class="text-sm text-gray-500">#046307</div>
                                </div>

                                <!-- Gold -->
                                <div class="text-center group">
                                    <div
                                        class="w-24 h-24 rounded-full bg-gold-500 mx-auto mb-4 shadow-xl group-hover:scale-110 transition-transform ring-4 ring-gold-100">
                                    </div>
                                    <div class="font-semibold text-gold-700 mb-1">Gold</div>
                                    <div class="text-sm text-gray-500">#C5A15C</div>
                                </div>

                                <!-- White -->
                                <div class="text-center group">
                                    <div
                                        class="w-24 h-24 rounded-full bg-white mx-auto mb-4 shadow-xl group-hover:scale-110 transition-transform ring-4 ring-gray-200 border-2 border-gray-300">
                                    </div>
                                    <div class="font-semibold text-gray-800 mb-1">White</div>
                                    <div class="text-sm text-gray-500">#FFFFFF</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Decorative Section Divider -->
                <div class="flex items-center justify-center py-4 bg-gradient-to-b from-white to-emerald-50">
                    <div class="flex items-center gap-3">
                        <div class="h-px w-12 bg-gradient-to-r from-transparent to-emerald-300"></div>
                        <svg class="w-4 h-4 text-gold-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="h-px w-12 bg-gradient-to-l from-transparent to-emerald-300"></div>
                    </div>
                </div>

                <!-- Ceremony Note Section -->
                <section id="ceremony-note"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'ceremony')">
                    <div class="max-w-2xl mx-auto text-center" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="mb-8">
                            <svg class="w-14 h-14 mx-auto text-emerald-600 drop-shadow-lg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zM10 15a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 15zM10 7a3 3 0 100 6 3 3 0 000-6zM15.657 5.404a.75.75 0 10-1.06-1.06l-1.061 1.06a.75.75 0 001.06 1.06l1.06-1.06zM6.464 14.596a.75.75 0 10-1.06-1.06l-1.06 1.06a.75.75 0 001.06 1.06l1.06-1.06zM18 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 0118 10zM5 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 015 10zM14.596 15.657a.75.75 0 001.06-1.06l-1.06-1.061a.75.75 0 10-1.06 1.06l1.06 1.06zM5.404 6.464a.75.75 0 001.06-1.06l-1.06-1.06a.75.75 0 10-1.061 1.06l1.06 1.06z" />
                            </svg>
                        </div>

                        <h2 class="font-cursive text-4xl md:text-5xl text-emerald-700 mb-8">
                            Ceremony</h2>

                        <div class="bg-emerald-50 rounded-3xl p-10 shadow-xl border border-emerald-200">
                            <p class="text-gray-700 text-lg leading-relaxed">
                                Ceremony is strictly by invitation. While we would love to have you on our guest list,
                                please leave our little nephews and nieces at home for an intimate adults-only event.
                                Please note, your access card will be required for the reception venue.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Decorative Section Divider -->
                <div class="flex items-center justify-center py-4 bg-emerald-50">
                    <div class="flex items-center gap-3">
                        <div class="h-px w-12 bg-gradient-to-r from-transparent to-emerald-300"></div>
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="h-px w-12 bg-gradient-to-l from-transparent to-emerald-300"></div>
                    </div>
                </div>

                <!-- Registry Section -->
                <section id="registry"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-gradient-to-b from-emerald-50 to-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'registry')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2 class="font-cursive text-4xl md:text-5xl text-emerald-700 mb-3">
                                Registry & Gifts</h2>
                            <p class="text-gray-600">The presence and prayers of our family and friends is the greatest
                                gift of all. However, if you desire to bless us with a gift, we would greatly appreciate
                                any home essential gift and above all, a cash gift.
                            </p>
                        </div>

                        <div class="grid gap-6">
                            <!-- MTN Mobile Money -->
                            <div
                                class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-xl font-bold text-yellow-900">MTN Mobile Money</h3>
                                    <svg class="w-10 h-10 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                                        <path fill-rule="evenodd"
                                            d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-2xl font-mono font-bold text-yellow-800 tracking-wide">024 349 3973</p>
                                <p class="text-sm text-yellow-700 mt-2">Richard Kwame Bansah</p>
                            </div>

                            <!-- Telecel Cash -->
                            {{--  <div
                                class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-xl font-bold text-red-900">Telecel Cash</h3>
                                    <svg class="w-10 h-10 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-2xl font-mono font-bold text-red-800 tracking-wide">0201 987 654</p>
                                <p class="text-sm text-red-700 mt-2">Peace Adjei</p>
                            </div>  --}}
                        </div>
                    </div>
                </section>

                <!-- Decorative Section Divider -->
                <div class="flex items-center justify-center py-4 bg-white">
                    <div class="flex items-center gap-3">
                        <div class="h-px w-12 bg-gradient-to-r from-transparent to-gold-300"></div>
                        <svg class="w-4 h-4 text-gold-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="h-px w-12 bg-gradient-to-l from-transparent to-gold-300"></div>
                    </div>
                </div>

                <!-- RSVP Section -->
                <section id="rsvp"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-emerald-50"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'rsvp')">
                    <div class="max-w-2xl mx-auto text-center" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="mb-14">
                            <h2 class="font-cursive text-4xl md:text-5xl text-emerald-700 mb-3">
                                RSVP</h2>
                            <p class="text-gray-600">Please let us know if you'll be joining us</p>
                        </div>

                        <div class="bg-emerald-700 rounded-3xl p-8 md:p-10 shadow-2xl text-white">
                            <p class="text-base md:text-lg mb-8 text-white">
                                Kindly confirm your attendance by <span class="font-bold">October 25th, 2025</span>
                            </p>

                            <div class="space-y-4 md:space-y-6">
                                <!-- Call Austin -->
                                <a href="tel:+233531430929"
                                    class="block bg-emerald-600 hover:bg-emerald-500 rounded-2xl p-5 md:p-6 transition-all duration-300 group shadow-lg hover:shadow-2xl hover:scale-105 relative overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700">
                                    </div>
                                    <div class="flex items-center justify-center gap-4 relative z-10">
                                        <svg class="w-7 h-7 md:w-8 md:h-8 text-gold-400 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <div class="text-left">
                                            <div class="font-semibold text-base md:text-lg text-white">Call Austin
                                                Kpatsa</div>
                                            <div class="text-white/90 text-sm md:text-base">053 143 0929</div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Call Emmanuella -->
                                <a href="tel:+233535624657"
                                    class="block bg-emerald-600 hover:bg-emerald-500 rounded-2xl p-5 md:p-6 transition-all duration-300 group shadow-lg hover:shadow-2xl hover:scale-105 relative overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700">
                                    </div>
                                    <div class="flex items-center justify-center gap-4 relative z-10">
                                        <svg class="w-7 h-7 md:w-8 md:h-8 text-gold-400 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <div class="text-left">
                                            <div class="font-semibold text-base md:text-lg text-white">Call Emmanuella
                                                Avornyo</div>
                                            <div class="text-white/90 text-sm md:text-base">053 562 4657</div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Call Raphael -->
                                <a href="tel:+233548828183"
                                    class="block bg-emerald-600 hover:bg-emerald-500 rounded-2xl p-5 md:p-6 transition-all duration-300 group shadow-lg hover:shadow-2xl hover:scale-105 relative overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700">
                                    </div>
                                    <div class="flex items-center justify-center gap-4 relative z-10">
                                        <svg class="w-7 h-7 md:w-8 md:h-8 text-gold-400 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <div class="text-left">
                                            <div class="font-semibold text-base md:text-lg text-white">Call Raphael
                                                Sefakor
                                            </div>
                                            <div class="text-white/90 text-sm md:text-base">054 882 8183</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Decorative Section Divider -->
                <div class="flex items-center justify-center py-4 bg-emerald-50">
                    <div class="flex items-center gap-3">
                        <div class="h-px w-12 bg-gradient-to-r from-transparent to-emerald-300"></div>
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="h-px w-12 bg-gradient-to-l from-transparent to-emerald-300"></div>
                    </div>
                </div>

                <!-- Q&A Section -->
                <section id="qa"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-gradient-to-b from-emerald-50 to-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'qa')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2 class="font-cursive text-4xl md:text-5xl text-emerald-700 mb-3">
                                Q & A
                            </h2>
                            <p class="text-gray-600">For all our friends and family who have lots of questions, please
                                check out our Q & A first!</p>
                        </div>

                        @livewire('faq-accordion')
                    </div>
                </section>

                <!-- Decorative Section Divider -->
                <div class="flex items-center justify-center py-4 bg-white">
                    <div class="flex items-center gap-3">
                        <div class="h-px w-12 bg-gradient-to-r from-transparent to-emerald-300"></div>
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="h-px w-12 bg-gradient-to-l from-transparent to-emerald-300"></div>
                    </div>
                </div>

                <!-- Location Section -->
                <section id="location"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'location')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2 class="font-cursive text-4xl md:text-5xl text-emerald-700 mb-3">
                                Location</h2>
                            <p class="text-gray-600">Lawyer Kpatsa Residence, Tanyigbe-Etoe</p>
                        </div>

                        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-2 border-emerald-100">
                            <!-- Map -->
                            <div class="aspect-[16/9] bg-gray-100">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5!2d0.517228!3d6.690065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDEnMjQuMiJOIDDCsDMxJzAyLjAiRQ!5e0!3m2!1sen!2sgh!4v1234567890"
                                    width="100%" height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy">
                                </iframe>
                            </div>

                            <!-- Location Details -->
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-emerald-800 mb-2">Lawyer Kpatsa Residence</h3>
                                <p class="text-lg text-gray-700 mb-1">Tanyigbe-Etoe, Ho - Volta Region</p>
                                <p class="text-gray-600 mb-6"></p>

                                <a href="https://maps.google.com/?q=6.690065,0.517228" target="_blank"
                                    class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
                                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Get Directions
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="bg-emerald-800 text-white py-16 px-6">
                    <div class="max-w-2xl mx-auto text-center">
                        <h3 class="font-cursive text-5xl mb-6 text-white">Thank You</h3>
                        <p class="text-emerald-100 text-lg mb-8">We can't wait to celebrate with you!</p>

                        <div
                            class="h-px w-32 bg-gradient-to-r from-transparent via-white/40 to-transparent mx-auto mb-8">
                        </div>

                        <p class="text-emerald-300 text-sm mb-2">&copy; 2025 Richard & Peace Wedding</p>
                        <p class="text-emerald-400 text-xs">
                            Powered by <a href="https://rcodez.com" target="_blank"
                                class="text-gold-400 hover:text-gold-300 underline transition-colors">rCodez</a>
                        </p>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
