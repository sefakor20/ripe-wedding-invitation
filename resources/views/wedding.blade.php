<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard & Peace - We're Getting Married!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased bg-white text-gray-800 overflow-hidden">

    <!-- Split Screen Layout -->
    <div class="fixed inset-0 flex flex-col lg:flex-row">

        <!-- Left Side - Dynamic Image Gallery (Fixed) -->
        <div class="relative w-full lg:w-1/2 h-1/3 lg:h-full overflow-hidden" x-data="{
            currentImage: 'couple-1.jpg',
            images: {
                'hero': 'couple-1.jpg',
                'schedule': 'couple-2.jpg',
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
                <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
                    :class="currentImage === image ? 'opacity-100 z-10' : 'opacity-0 z-0'">
                    <img :src="`/images/${image}`" :alt="key" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/70 via-emerald-800/60 to-black/70">
                    </div>
                </div>
            </template>

            <!-- Logo Badge - Top Center -->
            <!-- Elegant Overlay Content on Image -->
            <div class="absolute inset-x-0 bottom-0 flex items-end justify-center z-20 p-6 lg:p-12 pb-16 lg:pb-20">
                <div class="text-center text-white max-w-lg">
                    <!-- Logo Badge Above Names -->
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/ripe-logo.jpeg') }}" alt="Richard & Peace Logo"
                            class="w-20 h-20 lg:w-24 lg:h-24 rounded-full object-cover shadow-2xl ring-4 ring-gold-300/70 ring-offset-2 ring-offset-white/10">
                    </div>

                    <!-- Names -->
                    <h1 class="font-cursive text-4xl sm:text-5xl lg:text-6xl mb-5 drop-shadow-2xl leading-tight">
                        Richard <span class="text-gold-300">&</span> Peace
                    </h1>

                    <div
                        class="h-1 w-24 bg-gradient-to-r from-transparent via-gold-300 to-transparent mx-auto mb-5 shadow-lg">
                    </div>

                    <!-- Tagline -->
                    <p class="font-serif text-lg lg:text-2xl text-white/95 drop-shadow-lg mb-6">
                        #RipeForever2025
                    </p>

                    <!-- Wedding Date Badge -->
                    <div
                        class="inline-block bg-gradient-to-r from-gold-500/20 to-gold-600/20 backdrop-blur-md border-2 border-gold-300/50 rounded-full px-6 py-2 shadow-2xl">
                        <p class="text-gold-200 font-semibold text-base lg:text-lg tracking-wide">
                            29 • 11 • 2025
                        </p>
                    </div>
                </div>
            </div>

            <!-- Decorative Corner Ornaments -->
            <div class="absolute top-8 left-8 w-16 h-16 border-t-2 border-l-2 border-gold-400/30 z-20"></div>
            <div class="absolute top-8 right-8 w-16 h-16 border-t-2 border-r-2 border-gold-400/30 z-20"></div>
            <div class="absolute bottom-8 left-8 w-16 h-16 border-b-2 border-l-2 border-gold-400/30 z-20"></div>
            <div class="absolute bottom-8 right-8 w-16 h-16 border-b-2 border-r-2 border-gold-400/30 z-20"></div>
        </div>

        <!-- Right Side - Scrollable Content -->
        <div class="w-full lg:w-1/2 h-2/3 lg:h-full overflow-y-auto bg-white">
            <div class="min-h-full">

                <!-- Hero Welcome Section -->
                <section id="hero"
                    class="min-h-screen flex items-center justify-center px-6 lg:px-12 py-20 bg-gradient-to-br from-emerald-50 via-white to-gold-50"
                    x-data="{ show: true }" x-init="$dispatch('scroll-section', 'hero')"
                    x-intersect:enter="$dispatch('scroll-section', 'hero')">
                    <div class="max-w-2xl mx-auto text-center" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <h2
                            class="font-cursive text-4xl md:text-6xl bg-gradient-to-r from-emerald-700 to-gold-600 bg-clip-text text-transparent mb-6 leading-tight">
                            Join Us</h2>

                        <p class="font-serif text-lg md:text-2xl text-gray-700 mb-12 leading-relaxed">
                            as we celebrate the beginning of our forever journey together
                        </p>

                        <!-- Elegant Date Display -->
                        <div class="flex flex-wrap justify-center gap-6 mb-14">
                            <div
                                class="bg-gradient-to-br from-white to-emerald-50 border-2 border-emerald-600 rounded-2xl p-8 shadow-xl hover:shadow-2xl hover:scale-105 transition-all">
                                <div
                                    class="text-6xl font-bold bg-gradient-to-br from-emerald-700 to-emerald-900 bg-clip-text text-transparent mb-2">
                                    29</div>
                                <div class="text-sm uppercase tracking-widest text-gray-600">November</div>
                            </div>
                            <div
                                class="bg-gradient-to-br from-white to-gold-50 border-2 border-gold-500 rounded-2xl p-8 shadow-xl hover:shadow-2xl hover:scale-105 transition-all">
                                <div class="text-6xl font-bold text-gold-700 mb-2">
                                    2025</div>
                                <div class="text-sm uppercase tracking-widest text-gray-600">Saturday</div>
                            </div>
                        </div>

                        <!-- Live Countdown Timer -->
                        <div class="bg-gradient-to-br from-emerald-700 via-emerald-800 to-gold-700 rounded-3xl p-10 shadow-2xl border border-gold-400/30"
                            x-data="{
                                days: 0,
                                hours: 0,
                                minutes: 0,
                                seconds: 0,
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
                                }
                            }">
                            <div class="text-white text-xs uppercase tracking-widest mb-6 font-semibold opacity-90">
                                Counting Down To Forever</div>
                            <div class="grid grid-cols-4 gap-4 text-center">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                                    <div class="text-4xl lg:text-5xl font-bold text-gold-300 mb-1" x-text="days"></div>
                                    <div class="text-xs uppercase text-white/80">Days</div>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                                    <div class="text-4xl lg:text-5xl font-bold text-gold-300 mb-1" x-text="hours"></div>
                                    <div class="text-xs uppercase text-white/80">Hours</div>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                                    <div class="text-4xl lg:text-5xl font-bold text-gold-300 mb-1" x-text="minutes">
                                    </div>
                                    <div class="text-xs uppercase text-white/80">Min</div>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                                    <div class="text-4xl lg:text-5xl font-bold text-gold-300 mb-1" x-text="seconds">
                                    </div>
                                    <div class="text-xs uppercase text-white/80">Sec</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Schedule Section -->
                <section id="schedule"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'schedule')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2
                                class="font-cursive text-4xl md:text-5xl bg-gradient-to-r from-emerald-700 via-emerald-600 to-gold-600 bg-clip-text text-transparent mb-3">
                                Our Special Day</h2>
                            <p class="text-gray-600">Timeline of celebrations</p>
                        </div>

                        <!-- Timeline -->
                        <div class="space-y-8">
                            <!-- Ceremony -->
                            <div class="flex gap-6 group">
                                <div class="flex-shrink-0 w-24 text-right">
                                    <div class="text-2xl font-bold text-emerald-700">
                                        Part 1</div>
                                    <div class="text-sm text-gray-500">Nov 8</div>
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
                            <div class="flex gap-6 group">
                                <div class="flex-shrink-0 w-24 text-right">
                                    <div class="text-2xl font-bold text-gold-700">
                                        Part 2</div>
                                </div>
                                <div class="relative flex-1">
                                    <div
                                        class="absolute left-0 top-0 w-4 h-4 rounded-full bg-gradient-to-br from-gold-500 to-gold-600 ring-4 ring-gold-100 shadow-lg">
                                    </div>
                                    <div
                                        class="ml-8 bg-gradient-to-br from-gold-50 to-white rounded-xl p-6 border border-gold-100 group-hover:shadow-xl group-hover:border-gold-300 transition-all">
                                        <h3 class="text-xl font-bold text-gold-700 mb-2">Exchange of vows</h3>
                                        <p class="text-gray-600">
                                            Join us as we exchange our vows
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Marriage Registry (Private) -->
                            <div class="flex gap-6 group">
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
                            <div class="flex gap-6 group">
                                <div class="flex-shrink-0 w-24 text-right">
                                    <div class="text-2xl font-bold text-gold-700">
                                        Part 4</div>
                                </div>
                                <div class="relative flex-1">
                                    <div
                                        class="absolute left-0 top-0 w-4 h-4 rounded-full bg-gradient-to-br from-gold-500 to-gold-600 ring-4 ring-gold-100 shadow-lg">
                                    </div>
                                    <div
                                        class="ml-8 bg-gradient-to-br from-gold-50 to-white rounded-xl p-6 border border-gold-100 group-hover:shadow-xl group-hover:border-gold-300 transition-all">
                                        <h3 class="text-xl font-bold text-gold-700 mb-2">Reception</h3>
                                        <p class="text-gray-600">
                                            Celebrate with us with dinner, dancing, and unforgettable memories
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Dress Code Section -->
                <section id="dress-code"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-gradient-to-b from-emerald-50 to-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'dress')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2
                                class="font-cursive text-4xl md:text-5xl bg-gradient-to-r from-emerald-700 via-gold-600 to-emerald-700 bg-clip-text text-transparent mb-3">
                                Dress Code</h2>
                            <p class="text-gray-600">Elegance in emerald green, gold, and white</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-white via-emerald-50/30 to-gold-50/30 rounded-3xl shadow-2xl p-10 border border-gold-100">
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

                <!-- Ceremony Note Section -->
                <section id="ceremony-note"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'ceremony')">
                    <div class="max-w-2xl mx-auto text-center" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="mb-8">
                            <svg class="w-14 h-14 mx-auto text-gold-500 drop-shadow-lg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zM10 15a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 15zM10 7a3 3 0 100 6 3 3 0 000-6zM15.657 5.404a.75.75 0 10-1.06-1.06l-1.061 1.06a.75.75 0 001.06 1.06l1.06-1.06zM6.464 14.596a.75.75 0 10-1.06-1.06l-1.06 1.06a.75.75 0 001.06 1.06l1.06-1.06zM18 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 0118 10zM5 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 015 10zM14.596 15.657a.75.75 0 001.06-1.06l-1.06-1.061a.75.75 0 10-1.06 1.06l1.06 1.06zM5.404 6.464a.75.75 0 001.06-1.06l-1.06-1.06a.75.75 0 10-1.061 1.06l1.06 1.06z" />
                            </svg>
                        </div>

                        <h2
                            class="font-cursive text-4xl md:text-5xl bg-gradient-to-r from-emerald-700 to-gold-600 bg-clip-text text-transparent mb-8">
                            Ceremony Note</h2>

                        <div
                            class="bg-gradient-to-br from-emerald-50 via-white to-gold-50 rounded-3xl p-10 shadow-xl border border-gold-200">
                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our ceremony will begin promptly at <span class="font-bold text-emerald-700">2:00
                                    PM</span>.
                                We kindly ask all guests to arrive by <span class="font-bold text-emerald-700">1:45
                                    PM</span> to ensure
                                we can start on time.
                            </p>
                            <p class="text-gray-600 italic">
                                "Love is patient, love is kind... It always protects, always trusts, always hopes,
                                always perseveres."
                            </p>
                            <p class="text-sm text-gray-500 mt-2">- 1 Corinthians 13:4-7</p>
                        </div>
                    </div>
                </section>

                <!-- Registry Section -->
                <section id="registry"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-gradient-to-b from-emerald-50 to-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'registry')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2
                                class="font-cursive text-4xl md:text-5xl bg-gradient-to-r from-gold-600 via-emerald-700 to-gold-600 bg-clip-text text-transparent mb-3">
                                Registry & Gifts</h2>
                            <p class="text-gray-600">Your presence is the greatest gift, but if you wish to honor us...
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
                                <p class="text-2xl font-mono font-bold text-yellow-800 tracking-wide">0244 123 456</p>
                                <p class="text-sm text-yellow-700 mt-2">Richard Mensah</p>
                            </div>

                            <!-- Telecel Cash -->
                            <div
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
                            </div>
                        </div>
                    </div>
                </section>

                <!-- RSVP Section -->
                <section id="rsvp"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-white"
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

                        <div
                            class="bg-gradient-to-b from-emerald-600 via-emerald-700 to-emerald-800 rounded-3xl p-10 shadow-2xl text-white">
                            <p class="text-lg mb-8 text-white">
                                Kindly confirm your attendance by <span class="font-bold">October 25th, 2025</span>
                            </p>

                            <div class="space-y-6">
                                <!-- Call Richard -->
                                <a href="tel:+233244123456"
                                    class="block bg-white/15 hover:bg-white/25 backdrop-blur-sm rounded-2xl p-6 transition-all group">
                                    <div class="flex items-center justify-center gap-4">
                                        <svg class="w-8 h-8 text-gold-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <div class="text-left">
                                            <div class="font-semibold text-lg text-white">Call Richard</div>
                                            <div class="text-white/90">0244 123 456</div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Call Peace -->
                                <a href="tel:+233201987654"
                                    class="block bg-white/15 hover:bg-white/25 backdrop-blur-sm rounded-2xl p-6 transition-all group">
                                    <div class="flex items-center justify-center gap-4">
                                        <svg class="w-8 h-8 text-gold-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <div class="text-left">
                                            <div class="font-semibold text-lg text-white">Call Peace</div>
                                            <div class="text-white/90">0201 987 654</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Q&A Section -->
                <section id="qa"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-gradient-to-b from-emerald-50 to-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'qa')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2
                                class="font-cursive text-4xl md:text-5xl bg-gradient-to-r from-emerald-700 via-gold-600 to-emerald-700 bg-clip-text text-transparent mb-3">
                                Questions & Answers
                            </h2>
                            <p class="text-gray-600">Everything you need to know</p>
                        </div>

                        @livewire('faq-accordion')
                    </div>
                </section>

                <!-- Location Section -->
                <section id="location"
                    class="min-h-screen flex items-center justify-center py-20 px-6 lg:px-12 bg-white"
                    x-data="{ show: true }" x-intersect:enter="$dispatch('scroll-section', 'location')">
                    <div class="max-w-2xl mx-auto w-full" x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <div class="text-center mb-14">
                            <h2
                                class="font-cursive text-4xl md:text-5xl bg-gradient-to-r from-emerald-700 to-gold-600 bg-clip-text text-transparent mb-3">
                                Location</h2>
                            <p class="text-gray-600">Lawyer Kpatsa Residence, Tanyigbe-Etoe</p>
                        </div>

                        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-2 border-gold-100">
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
                                    class="inline-block bg-gradient-to-r from-emerald-600 to-gold-600 hover:from-emerald-700 hover:to-gold-700 text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                                    Get Directions
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="bg-gradient-to-br from-emerald-900 via-emerald-800 to-gold-900 text-white py-16 px-6">
                    <div class="max-w-2xl mx-auto text-center">
                        <h3 class="font-cursive text-5xl mb-6 text-gold-200">Thank You</h3>
                        <p class="text-emerald-100 text-lg mb-8">We can't wait to celebrate with you!</p>

                        <div
                            class="h-px w-32 bg-gradient-to-r from-transparent via-gold-400 to-transparent mx-auto mb-8">
                        </div>

                        <p class="text-emerald-300 text-sm">&copy; 2025 Richard & Peace Wedding</p>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
