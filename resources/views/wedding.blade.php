@extends('layouts.wedding')

@section('content')
    <!-- Hero Section with Photo -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/couple-1.jpg') }}" alt="Richard and Peace" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-primary/80 via-emerald-700/70 to-black/60"></div>
        </div>

        <!-- Decorative Pattern Overlay -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <pattern id="floral" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                    <circle cx="60" cy="60" r="1.5" fill="white" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#floral)" />
            </svg>
        </div>

        <div class="container mx-auto px-4 sm:px-6 text-center relative z-10" x-data="{
            targetDate: new Date('2025-12-31T00:00:00'),
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0,
            updateCountdown() {
                const now = new Date();
                const diff = this.targetDate - now;
                if (diff > 0) {
                    this.days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    this.hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    this.seconds = Math.floor((diff % (1000 * 60)) / 1000);
                }
            }
        }"
            x-init="updateCountdown();
            setInterval(() => updateCountdown(), 1000)">
            <div class="max-w-5xl mx-auto space-y-10 py-12" x-data="{ show: true }"
                x-transition:enter="transition ease-out duration-1200" x-transition:enter-start="opacity-0 translate-y-16"
                x-transition:enter-end="opacity-100 translate-y-0">

                <!-- Names -->
                <div class="space-y-6">
                    <h1
                        class="text-6xl sm:text-7xl md:text-8xl lg:text-9xl font-cursive text-white leading-tight tracking-wide drop-shadow-2xl">
                        Richard <span class="text-gold inline-block mx-2">&</span> Peace
                    </h1>

                    <p
                        class="text-base sm:text-lg md:text-xl text-white/90 font-light max-w-2xl mx-auto px-4 drop-shadow-lg">
                        We're getting married! Join us as we celebrate our love 💍✨
                    </p>
                </div>

                <!-- Full Names -->
                <div class="space-y-3 text-white py-6">
                    <p class="text-xl sm:text-2xl md:text-3xl font-serif font-medium tracking-wide drop-shadow-lg">Richard
                        Kwame Bansa</p>
                    <p class="text-xl md:text-2xl text-gold font-light">&</p>
                    <p class="text-xl sm:text-2xl md:text-3xl font-serif font-medium tracking-wide drop-shadow-lg">Peace
                        Kafui
                        Anyormi-Kpatsa</p>
                </div>

                <!-- Date & Location -->
                <div class="space-y-4 py-8">
                    <div
                        class="inline-block bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl px-8 py-6 border-2 border-gold/30">
                        <p class="text-2xl sm:text-3xl md:text-4xl font-serif font-bold text-emerald-primary mb-2">31st
                            December 2025</p>
                        <div class="w-16 h-0.5 bg-gold mx-auto my-4"></div>
                        <p class="text-base sm:text-lg text-gray-700 font-medium">Lawyer Kpatsa Residence</p>
                        <p class="text-sm sm:text-base text-gray-600 mt-1">Tanyigbe-Etoe, Ho – Volta Region</p>
                    </div>
                </div>

                <!-- Countdown Timer -->
                <div class="flex justify-center gap-4 sm:gap-8 py-8 flex-wrap">
                    <div
                        class="bg-white/95 backdrop-blur-md rounded-xl shadow-xl px-6 py-4 border-2 border-gold/20 min-w-[80px]">
                        <div class="text-3xl sm:text-4xl font-bold text-emerald-primary" x-text="days"></div>
                        <div class="text-xs sm:text-sm text-gray-600 uppercase tracking-wider mt-1">Days</div>
                    </div>
                    <div
                        class="bg-white/95 backdrop-blur-md rounded-xl shadow-xl px-6 py-4 border-2 border-gold/20 min-w-[80px]">
                        <div class="text-3xl sm:text-4xl font-bold text-emerald-primary" x-text="hours"></div>
                        <div class="text-xs sm:text-sm text-gray-600 uppercase tracking-wider mt-1">Hours</div>
                    </div>
                    <div
                        class="bg-white/95 backdrop-blur-md rounded-xl shadow-xl px-6 py-4 border-2 border-gold/20 min-w-[80px]">
                        <div class="text-3xl sm:text-4xl font-bold text-emerald-primary" x-text="minutes"></div>
                        <div class="text-xs sm:text-sm text-gray-600 uppercase tracking-wider mt-1">Minutes</div>
                    </div>
                    <div
                        class="bg-white/95 backdrop-blur-md rounded-xl shadow-xl px-6 py-4 border-2 border-gold/20 min-w-[80px]">
                        <div class="text-3xl sm:text-4xl font-bold text-emerald-primary" x-text="seconds"></div>
                        <div class="text-xs sm:text-sm text-gray-600 uppercase tracking-wider mt-1">Seconds</div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="flex justify-center gap-4 flex-wrap pt-6">
                    <a href="#event-details"
                        class="bg-emerald-primary hover:bg-emerald-700 text-white px-6 py-3 rounded-full font-medium transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-sm sm:text-base">
                        View Details
                    </a>
                    <a href="#rsvp"
                        class="bg-gold hover:bg-yellow-600 text-white px-6 py-3 rounded-full font-medium transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-sm sm:text-base">
                        RSVP Now
                    </a>
                </div>

                <!-- Scroll Down Indicator -->
                <div class="mt-12 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-white opacity-90" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule / Event Details Section -->
    <section class="py-20 sm:py-28 bg-white" id="event-details">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" x-data="{ show: true }" x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-serif text-emerald-primary mb-4">Schedule</h2>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                    <p class="text-lg sm:text-xl text-gray-600 font-light max-w-2xl mx-auto">
                        The Day Forever Begins 🥹🥳🎉❤️
                    </p>
                </div>

                <!-- Timeline -->
                <div class="max-w-4xl mx-auto space-y-6" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100">

                    <!-- Engagement Ceremony -->
                    <div
                        class="bg-gradient-to-r from-emerald-50/50 to-white p-6 sm:p-8 rounded-2xl shadow-sm border border-emerald-100/50 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                            <div
                                class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 bg-emerald-primary rounded-full flex items-center justify-center text-3xl sm:text-4xl">
                                💍
                            </div>
                            <div class="flex-grow">
                                <h3 class="text-xl sm:text-2xl font-serif text-emerald-primary mb-2">Engagement Ceremony
                                </h3>
                                <p class="text-gray-700 font-medium mb-1">Traditional Engagement</p>
                                <p class="text-sm sm:text-base text-gray-600">Details to be announced</p>
                            </div>
                        </div>
                    </div>

                    <!-- Exchange of Vows -->
                    <div
                        class="bg-gradient-to-r from-gold/10 to-white p-6 sm:p-8 rounded-2xl shadow-sm border border-gold/20 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                            <div
                                class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 bg-gold rounded-full flex items-center justify-center text-3xl sm:text-4xl">
                                💒
                            </div>
                            <div class="flex-grow">
                                <h3 class="text-xl sm:text-2xl font-serif text-emerald-primary mb-2">Exchange of Vows</h3>
                                <p class="text-gray-700 font-medium mb-1">Wedding Ceremony</p>
                                <p class="text-sm sm:text-base text-gray-600">Outdoors at the Kpatsa Residence</p>
                            </div>
                        </div>
                    </div>

                    <!-- Marriage Registry -->
                    <div
                        class="bg-gradient-to-r from-emerald-50/50 to-white p-6 sm:p-8 rounded-2xl shadow-sm border border-emerald-100/50 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                            <div
                                class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 bg-emerald-primary rounded-full flex items-center justify-center text-3xl sm:text-4xl">
                                📜
                            </div>
                            <div class="flex-grow">
                                <h3 class="text-xl sm:text-2xl font-serif text-emerald-primary mb-2">Marriage Registry</h3>
                                <p class="text-gray-700 font-medium italic mb-1">Private Event</p>
                                <p class="text-sm sm:text-base text-gray-600">By invitation only</p>
                            </div>
                        </div>
                    </div>

                    <!-- Reception -->
                    <div
                        class="bg-gradient-to-r from-gold/10 to-white p-6 sm:p-8 rounded-2xl shadow-sm border border-gold/20 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                            <div
                                class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 bg-gold rounded-full flex items-center justify-center text-3xl sm:text-4xl">
                                🎉
                            </div>
                            <div class="flex-grow">
                                <h3 class="text-xl sm:text-2xl font-serif text-emerald-primary mb-2">Reception</h3>
                                <p class="text-gray-700 font-medium mb-1">Celebration & Dining</p>
                                <p class="text-sm sm:text-base text-gray-600">Access card required for entry</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="mt-12 text-center" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700 delay-400" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100">
                    <p class="text-gray-600 text-sm sm:text-base max-w-3xl mx-auto italic leading-relaxed px-4">
                        A thousand little moments brought us here 🥹 — smiles exchanged, late-night conversations,
                        spontaneous adventures, and quiet laughter only we understood. Now, surrounded by the people we love
                        most, we're stepping into forever, hand in hand.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery Section -->
    <section class="py-20 sm:py-28 bg-gradient-to-br from-white via-gold/5 to-emerald-50/20">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-serif text-emerald-primary mb-4">Our Journey</h2>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                    <p class="text-lg sm:text-xl text-gray-600 font-light max-w-2xl mx-auto italic">
                        Every picture tells our story, every smile captures our love ❤️
                    </p>
                </div>

                <!-- Photo Grid -->
                <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Photo 1 - Front facing couple -->
                    <div
                        class="group relative overflow-hidden rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2">
                        <img src="{{ asset('images/couple-1.jpg') }}" alt="Richard and Peace - Together"
                            class="w-full h-[400px] lg:h-[500px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-emerald-primary/80 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                            <p class="font-cursive text-2xl sm:text-3xl text-gold">Together Forever</p>
                        </div>
                    </div>

                    <!-- Photo 2 - Forever Genuine -->
                    <div
                        class="group relative overflow-hidden rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2">
                        <img src="{{ asset('images/couple-2.jpg') }}" alt="Richard and Peace - Forever Genuine"
                            class="w-full h-[400px] lg:h-[500px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                            <p class="font-cursive text-2xl sm:text-3xl text-gold">Forever Genuine</p>
                        </div>
                    </div>

                    <!-- Photo 3 - Seated couple -->
                    <div
                        class="group relative overflow-hidden rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 md:col-span-2 lg:col-span-1">
                        <img src="{{ asset('images/couple-3.jpg') }}" alt="Richard and Peace - Our Love"
                            class="w-full h-[400px] lg:h-[500px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-emerald-700/80 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                            <p class="font-cursive text-2xl sm:text-3xl text-gold">Pure Joy</p>
                        </div>
                    </div>

                    <!-- Photo 4 - White outfit -->
                    <div
                        class="group relative overflow-hidden rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 md:col-span-2 lg:col-span-1">
                        <img src="{{ asset('images/couple-4.jpg') }}" alt="Richard and Peace - Elegant"
                            class="w-full h-[400px] lg:h-[500px] object-cover group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gold/70 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-500">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                            <p class="font-cursive text-2xl sm:text-3xl text-gold">Elegance & Grace</p>
                        </div>
                    </div>
                </div>

                <!-- Love Quote -->
                <div class="mt-16 text-center">
                    <blockquote
                        class="text-xl sm:text-2xl font-serif italic text-emerald-primary max-w-3xl mx-auto leading-relaxed">
                        "In all the world, there is no heart for me like yours. In all the world, there is no love for you
                        like mine."
                        <footer class="mt-4 text-base text-gray-600 not-italic">— Maya Angelou</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Dress Code Section -->
    <section class="py-20 sm:py-28 bg-gradient-to-br from-emerald-50/30 via-white to-gold/5">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-5xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-serif text-emerald-primary mb-4">Dress Code</h2>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                    <p class="text-xl sm:text-2xl font-cursive text-gold mb-6">
                        Dress to complement our love in these colors
                    </p>
                    <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto px-4">
                        The theme is elegant with a twist of extra. Just no white (unless you're Peace 👑).
                    </p>
                </div>

                <!-- Color Swatches -->
                <div class="flex justify-center gap-8 sm:gap-12 flex-wrap mb-12" x-data="{ show: false }"
                    x-intersect="show = true" x-show="show"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">

                    <div class="text-center space-y-4 group">
                        <div class="relative">
                            <div
                                class="w-28 h-28 sm:w-36 sm:h-36 rounded-full bg-emerald-primary shadow-2xl mx-auto border-4 border-white group-hover:scale-110 transition-transform duration-300">
                            </div>
                            <div class="absolute inset-0 rounded-full bg-emerald-primary opacity-20 blur-2xl"></div>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-base sm:text-lg">Emerald Green</p>
                            <p class="text-xs sm:text-sm text-gray-500 font-mono">#046307</p>
                        </div>
                    </div>

                    <div class="text-center space-y-4 group">
                        <div class="relative">
                            <div
                                class="w-28 h-28 sm:w-36 sm:h-36 rounded-full bg-gold shadow-2xl mx-auto border-4 border-white group-hover:scale-110 transition-transform duration-300">
                            </div>
                            <div class="absolute inset-0 rounded-full bg-gold opacity-20 blur-2xl"></div>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-base sm:text-lg">Gold</p>
                            <p class="text-xs sm:text-sm text-gray-500 font-mono">#C5A15C</p>
                        </div>
                    </div>

                    <div class="text-center space-y-4 group">
                        <div class="relative">
                            <div
                                class="w-28 h-28 sm:w-36 sm:h-36 rounded-full bg-white shadow-2xl mx-auto border-4 border-gray-200 group-hover:scale-110 transition-transform duration-300">
                            </div>
                            <div class="absolute inset-0 rounded-full bg-gray-300 opacity-10 blur-2xl"></div>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-base sm:text-lg">White</p>
                            <p class="text-xs sm:text-sm text-gray-500 font-mono">#FFFFFF</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ceremony Note Section -->
    <section
        class="py-20 sm:py-24 bg-gradient-to-br from-emerald-primary via-emerald-700 to-emerald-800 text-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <pattern id="ceremony-pattern" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                    <circle cx="40" cy="40" r="1" fill="white" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#ceremony-pattern)" />
            </svg>
        </div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" x-data="{ show: true }"
                x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0">
                <div class="mb-6">
                    <svg class="w-12 h-12 sm:w-16 sm:h-16 mx-auto text-gold" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z" />
                    </svg>
                </div>
                <blockquote class="text-lg sm:text-xl md:text-2xl font-serif italic text-gold/90 leading-relaxed px-4">
                    "Ceremony is strictly by invitation. While we would love to have you on our guest list, please leave our
                    little nephews and nieces at home for an intimate adults-only event. Please note, your access card will
                    be required for the reception venue."
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Gifting Section -->
    <section class="py-20 sm:py-28 bg-white" id="registry">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-serif text-emerald-primary mb-4">Registry</h2>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                </div>

                <!-- Content -->
                <div class="space-y-10" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100">

                    <div class="text-center max-w-3xl mx-auto px-4">
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Your love, prayers, and presence on our special day mean more than words can say. If you'd like
                            to support us as we begin this beautiful journey together, you can find our gift options below.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                            We would greatly appreciate any home essential gift and above all, a cash gift to help us start
                            our new life together.
                        </p>
                    </div>

                    <!-- Payment Details Card -->
                    <div class="max-w-2xl mx-auto">
                        <div
                            class="bg-gradient-to-br from-emerald-50 to-gold/10 p-8 sm:p-10 rounded-3xl shadow-lg border border-emerald-100">
                            <div class="text-center mb-6">
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-emerald-primary rounded-full mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-serif text-emerald-primary mb-2">Send a Cash Gift</h3>
                            </div>

                            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                                        <span class="text-sm sm:text-base text-gray-600 font-medium">Mobile Money</span>
                                        <span class="text-gold font-semibold">MTN</span>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-2xl sm:text-3xl font-bold text-emerald-primary mb-2">0243493973</p>
                                        <p class="text-base sm:text-lg text-gray-700">Richard Kwame Bansah</p>
                                    </div>
                                </div>
                            </div>

                            <p class="text-center text-sm text-gray-600 mt-6 italic">
                                Thank you for being part of our story. Your generosity and love truly mean the world to us.
                                💛
                            </p>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4 justify-center flex-wrap">
                        <button
                            class="bg-emerald-primary hover:bg-emerald-700 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-medium transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-sm sm:text-base">
                            View Gift Registry
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RSVP / Contact Information Section -->
    <section class="py-20 sm:py-28 bg-gradient-to-br from-gray-50 via-white to-emerald-50/20" id="rsvp">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-5xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-serif text-emerald-primary mb-4">Confirm Your
                        Attendance</h2>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                    <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto px-4">
                        For any questions or to confirm your attendance, please reach out to our lovely coordinators:
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12" x-data="{ show: false }"
                    x-intersect="show = true" x-show="show"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">

                    <div
                        class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg border border-emerald-100/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="text-4xl sm:text-5xl mb-4 text-center">📞</div>
                        <p class="font-semibold text-gray-800 text-center mb-2 text-base sm:text-lg">Emmanuella Avornyo</p>
                        <a href="tel:0535624657"
                            class="block text-emerald-primary font-bold text-center text-lg sm:text-xl hover:text-emerald-700 transition-colors">
                            0535624657
                        </a>
                    </div>

                    <div
                        class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg border border-emerald-100/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="text-4xl sm:text-5xl mb-4 text-center">📞</div>
                        <p class="font-semibold text-gray-800 text-center mb-2 text-base sm:text-lg">Austin Kpatsa</p>
                        <a href="tel:0531430929"
                            class="block text-emerald-primary font-bold text-center text-lg sm:text-xl hover:text-emerald-700 transition-colors">
                            0531430929
                        </a>
                    </div>

                    <div
                        class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg border border-emerald-100/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 sm:col-span-2 lg:col-span-1">
                        <div class="text-4xl sm:text-5xl mb-4 text-center">📞</div>
                        <p class="font-semibold text-gray-800 text-center mb-2 text-base sm:text-lg">Raphael Sefakor
                            Adinkrah</p>
                        <a href="tel:0548828183"
                            class="block text-emerald-primary font-bold text-center text-lg sm:text-xl hover:text-emerald-700 transition-colors">
                            0548828183
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 sm:py-28 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-3xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-serif text-emerald-primary mb-4">Q & A</h2>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                    <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto px-4">
                        For all our friends and family who have lots of questions, please check out our Q & A first!
                    </p>
                </div>

                <!-- FAQ Content -->
                <div x-data="{ show: true }" x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <livewire:faq-accordion />
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-20 sm:py-28 bg-gradient-to-b from-gray-50 to-white" id="location">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-5xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-serif text-emerald-primary mb-4">Location</h2>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                </div>

                <!-- Location Content -->
                <div class="space-y-8" x-data="{ show: true }"
                    x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100">

                    <!-- Address Card -->
                    <div
                        class="text-center mb-8 bg-white rounded-2xl shadow-md p-6 sm:p-8 border border-emerald-100/50 max-w-2xl mx-auto">
                        <div
                            class="inline-flex items-center justify-center w-14 h-14 bg-emerald-primary rounded-full mb-4">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <p class="text-xl sm:text-2xl text-gray-800 font-semibold mb-2">Lawyer Kpatsa Residence</p>
                        <p class="text-base sm:text-lg text-gray-600">Tanyigbe-Etoe, Ho – Volta Region</p>
                    </div>

                    <!-- Map -->
                    <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.0!2d0.0!3d6.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzYnMDAuMCJOIDDCsDAwJzAwLjAiRQ!5e0!3m2!1sen!2sgh!4v1234567890"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="w-full">
                        </iframe>
                    </div>

                    <!-- Get Directions Button -->
                    <div class="text-center">
                        <a href="https://maps.google.com/?q=Lawyer+Kpatsa+Residence+Tanyigbe-Etoe+Ho+Volta+Region"
                            target="_blank"
                            class="inline-flex items-center gap-2 bg-emerald-primary hover:bg-emerald-700 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-medium transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-sm sm:text-base">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                </path>
                            </svg>
                            Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer
        class="py-16 sm:py-20 bg-gradient-to-br from-emerald-primary via-emerald-700 to-emerald-900 text-white relative overflow-hidden">
        <!-- Decorative Background -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <pattern id="footer-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="1" fill="white" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#footer-pattern)" />
            </svg>
        </div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Main Footer Content -->
                <div class="text-center space-y-6 mb-10">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gold rounded-full mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>

                    <div>
                        <p class="text-2xl sm:text-3xl md:text-4xl font-cursive text-gold mb-2">With all the love,</p>
                        <p class="text-3xl sm:text-4xl md:text-5xl font-serif font-light tracking-wide">Richard & Peace</p>
                        <p class="text-2xl sm:text-3xl mt-2">❤️</p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="flex flex-wrap justify-center gap-6 py-8 border-t border-white/20">
                    <a href="#event-details"
                        class="text-white/80 hover:text-gold transition-colors text-sm sm:text-base">Schedule</a>
                    <span class="text-white/40">•</span>
                    <a href="#registry"
                        class="text-white/80 hover:text-gold transition-colors text-sm sm:text-base">Registry</a>
                    <span class="text-white/40">•</span>
                    <a href="#rsvp"
                        class="text-white/80 hover:text-gold transition-colors text-sm sm:text-base">RSVP</a>
                    <span class="text-white/40">•</span>
                    <a href="#location"
                        class="text-white/80 hover:text-gold transition-colors text-sm sm:text-base">Location</a>
                </div>

                <!-- Copyright -->
                <div class="text-center pt-6 border-t border-white/20">
                    <p class="text-xs sm:text-sm text-white/60">© {{ date('Y') }} Richard & Peace. All rights reserved.
                    </p>
                    <p class="text-xs text-white/40 mt-2">Made with love for our special day</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
