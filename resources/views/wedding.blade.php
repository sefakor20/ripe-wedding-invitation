@extends('layouts.wedding')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <pattern id="floral" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                <circle cx="50" cy="50" r="2" fill="currentColor" class="text-[--color-emerald-primary]"/>
            </pattern>
            <rect width="100%" height="100%" fill="url(#floral)"/>
        </svg>
    </div>

    <div class="container mx-auto px-6 text-center relative z-10" x-data="{
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
    }" x-init="updateCountdown(); setInterval(() => updateCountdown(), 1000)">
        <div class="max-w-4xl mx-auto space-y-8"
             x-data="{ show: false }"
             x-init="setTimeout(() => show = true, 100)"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 translate-y-12"
             x-transition:enter-end="opacity-100 translate-y-0">

            <p class="text-lg text-gray-600 mb-4">Join us as we celebrate our love</p>

            <h1 class="text-7xl md:text-8xl font-cursive text-[--color-emerald-primary] mb-8">
                Richard <span class="text-[--color-gold]">&</span> Peace
            </h1>

            <div class="space-y-2 text-gray-700">
                <p class="text-2xl font-serif">Richard Kwame Bansa</p>
                <p class="text-xl text-[--color-gold]">&</p>
                <p class="text-2xl font-serif">Peace Kafui Anyormi-Kpatsa</p>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-300">
                <p class="text-xl text-gray-600">📍 Lawyer Kpatsa Residence</p>
                <p class="text-lg text-gray-500">Tanyigbe-Etoe, Ho – Volta Region</p>
            </div>

            <!-- Countdown Timer -->
            <div class="mt-12 flex justify-center gap-8 text-center">
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-[--color-emerald-primary]" x-text="days"></div>
                    <div class="text-sm text-gray-600 uppercase">Days</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-[--color-emerald-primary]" x-text="hours"></div>
                    <div class="text-sm text-gray-600 uppercase">Hours</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-[--color-emerald-primary]" x-text="minutes"></div>
                    <div class="text-sm text-gray-600 uppercase">Minutes</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-[--color-emerald-primary]" x-text="seconds"></div>
                    <div class="text-sm text-gray-600 uppercase">Seconds</div>
                </div>
            </div>

            <!-- Scroll Down Arrow -->
            <div class="mt-16 animate-bounce">
                <svg class="w-8 h-8 mx-auto text-[--color-gold]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Event Details Section -->
<section class="py-24 bg-white" id="event-details">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-5xl font-serif text-center text-[--color-emerald-primary] mb-16"
                x-data="{ show: false }"
                x-intersect="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0">
                Our Special Day
            </h2>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Engagement Ceremony -->
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-lg shadow-lg border border-gray-100"
                     x-data="{ show: false }"
                     x-intersect="show = true"
                     x-show="show"
                     x-transition:enter="transition ease-out duration-700 delay-100"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl mb-4 text-center">💍</div>
                    <h3 class="text-2xl font-serif text-[--color-emerald-primary] mb-4 text-center">Engagement Ceremony</h3>
                    <div class="space-y-2 text-gray-700 text-center">
                        <p class="font-medium">Traditional Engagement</p>
                        <p class="text-sm text-gray-600">Details to be announced</p>
                    </div>
                </div>

                <!-- Exchange of Vows -->
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-lg shadow-lg border border-gray-100"
                     x-data="{ show: false }"
                     x-intersect="show = true"
                     x-show="show"
                     x-transition:enter="transition ease-out duration-700 delay-200"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl mb-4 text-center">💒</div>
                    <h3 class="text-2xl font-serif text-[--color-emerald-primary] mb-4 text-center">Exchange of Vows</h3>
                    <div class="space-y-2 text-gray-700 text-center">
                        <p class="font-medium">Wedding Ceremony</p>
                        <p class="text-sm text-gray-600">Outdoors at the Kpatsa Residence</p>
                    </div>
                </div>

                <!-- Marriage Registry -->
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-lg shadow-lg border border-gray-100"
                     x-data="{ show: false }"
                     x-intersect="show = true"
                     x-show="show"
                     x-transition:enter="transition ease-out duration-700 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl mb-4 text-center">📜</div>
                    <h3 class="text-2xl font-serif text-[--color-emerald-primary] mb-4 text-center">Marriage Registry</h3>
                    <div class="space-y-2 text-gray-700 text-center">
                        <p class="font-medium italic">Private Event</p>
                        <p class="text-sm text-gray-600">By invitation only</p>
                    </div>
                </div>

                <!-- Reception -->
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-lg shadow-lg border border-gray-100"
                     x-data="{ show: false }"
                     x-intersect="show = true"
                     x-show="show"
                     x-transition:enter="transition ease-out duration-700 delay-400"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl mb-4 text-center">🎉</div>
                    <h3 class="text-2xl font-serif text-[--color-emerald-primary] mb-4 text-center">Reception</h3>
                    <div class="space-y-2 text-gray-700 text-center">
                        <p class="font-medium">Celebration & Dining</p>
                        <p class="text-sm text-gray-600">Access card required for entry</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dress Code Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-5xl font-serif text-[--color-emerald-primary] mb-8"
                x-data="{ show: false }"
                x-intersect="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0">
                Dress Code
            </h2>

            <p class="text-lg font-cursive text-[--color-gold] mb-12 text-2xl"
               x-data="{ show: false }"
               x-intersect="show = true"
               x-show="show"
               x-transition:enter="transition ease-out duration-700 delay-100"
               x-transition:enter-start="opacity-0"
               x-transition:enter-end="opacity-100">
                Dress to complement our love in these colors
            </p>

            <div class="flex justify-center gap-12 flex-wrap"
                 x-data="{ show: false }"
                 x-intersect="show = true"
                 x-show="show"
                 x-transition:enter="transition ease-out duration-700 delay-200"
                 x-transition:enter-start="opacity-0 scale-75"
                 x-transition:enter-end="opacity-100 scale-100">
                <div class="text-center space-y-3">
                    <div class="w-32 h-32 rounded-full bg-[--color-emerald-primary] shadow-2xl mx-auto border-4 border-white"></div>
                    <p class="font-medium text-gray-700">Emerald Green</p>
                    <p class="text-sm text-gray-500">#046307</p>
                </div>
                <div class="text-center space-y-3">
                    <div class="w-32 h-32 rounded-full bg-[--color-gold] shadow-2xl mx-auto border-4 border-white"></div>
                    <p class="font-medium text-gray-700">Gold</p>
                    <p class="text-sm text-gray-500">#C5A15C</p>
                </div>
                <div class="text-center space-y-3">
                    <div class="w-32 h-32 rounded-full bg-white shadow-2xl mx-auto border-4 border-gray-200"></div>
                    <p class="font-medium text-gray-700">White</p>
                    <p class="text-sm text-gray-500">#FFFFFF</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ceremony Note Section -->
<section class="py-24 bg-gradient-to-br from-[--color-emerald-primary] to-emerald-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center"
             x-data="{ show: false }"
             x-intersect="show = true"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 translate-y-8"
             x-transition:enter-end="opacity-100 translate-y-0">
            <blockquote class="text-xl md:text-2xl font-serif italic text-[--color-gold] leading-relaxed">
                "Ceremony is strictly by invitation. While we would love to have you on our guest list, please leave our little nephews and nieces at home for an intimate adults-only event. Please note, your access card will be required for the reception venue."
            </blockquote>
        </div>
    </div>
</section>

<!-- Gifting Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-5xl font-serif text-center text-[--color-emerald-primary] mb-8"
                x-data="{ show: false }"
                x-intersect="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0">
                Gifts & Blessings
            </h2>

            <div class="text-center space-y-8"
                 x-data="{ show: false }"
                 x-intersect="show = true"
                 x-show="show"
                 x-transition:enter="transition ease-out duration-700 delay-200"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100">
                <p class="text-lg text-gray-700 leading-relaxed">
                    The presence and prayers of our family and friends is the greatest gift of all. However, if you desire to bless us with a gift, we would greatly appreciate any home essential gift and above all, a cash gift.
                </p>

                <div class="flex gap-4 justify-center flex-wrap mt-8">
                    <button class="bg-[--color-emerald-primary] hover:bg-emerald-700 text-white px-8 py-4 rounded-full font-medium transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        View Gift Registry
                    </button>
                    <button class="bg-[--color-gold] hover:bg-yellow-600 text-white px-8 py-4 rounded-full font-medium transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Send a Cash Gift
                    </button>
                </div>

                <div class="mt-12 p-6 bg-gray-50 rounded-lg border-2 border-[--color-gold]">
                    <p class="text-sm text-gray-600 mb-2">Mobile Money</p>
                    <p class="text-xl font-medium text-gray-800">MTN - 0243493973</p>
                    <p class="text-gray-600">Richard Kwame Bansah</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-5xl font-serif text-center text-[--color-emerald-primary] mb-8"
                x-data="{ show: false }"
                x-intersect="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0">
                Contact Us
            </h2>

            <p class="text-center text-gray-600 mb-12">For any questions or assistance, please reach out to:</p>

            <div class="grid md:grid-cols-3 gap-6"
                 x-data="{ show: false }"
                 x-intersect="show = true"
                 x-show="show"
                 x-transition:enter="transition ease-out duration-700 delay-200"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl mb-3">📞</div>
                    <p class="font-medium text-gray-800">Emmanuella Avornyo</p>
                    <p class="text-[--color-emerald-primary] font-medium">0535624657</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl mb-3">📞</div>
                    <p class="font-medium text-gray-800">Austin Kpatsa</p>
                    <p class="text-[--color-emerald-primary] font-medium">0531430929</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl mb-3">📞</div>
                    <p class="font-medium text-gray-800">Raphael Sefakor Adinkrah</p>
                    <p class="text-[--color-emerald-primary] font-medium">0548828183</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-5xl font-serif text-center text-[--color-emerald-primary] mb-12"
                x-data="{ show: false }"
                x-intersect="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0">
                Frequently Asked Questions
            </h2>

            <div x-data="{ show: false }"
                 x-intersect="show = true"
                 x-show="show"
                 x-transition:enter="transition ease-out duration-700 delay-200"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100">
                <livewire:faq-accordion />
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-5xl font-serif text-center text-[--color-emerald-primary] mb-12"
                x-data="{ show: false }"
                x-intersect="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0">
                Location
            </h2>

            <div class="space-y-6"
                 x-data="{ show: false }"
                 x-intersect="show = true"
                 x-show="show"
                 x-transition:enter="transition ease-out duration-700 delay-200"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100">
                <div class="text-center mb-8">
                    <p class="text-xl text-gray-700 font-medium">Lawyer Kpatsa Residence</p>
                    <p class="text-gray-600">Tanyigbe-Etoe, Ho – Volta Region</p>
                </div>

                <div class="rounded-lg overflow-hidden shadow-xl border-4 border-white">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.0!2d0.0!3d6.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzYnMDAuMCJOIDDCsDAwJzAwLjAiRQ!5e0!3m2!1sen!2sgh!4v1234567890"
                        width="100%"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full">
                    </iframe>
                </div>

                <div class="text-center">
                    <a href="https://maps.google.com/?q=Lawyer+Kpatsa+Residence+Tanyigbe-Etoe+Ho+Volta+Region"
                       target="_blank"
                       class="inline-block bg-[--color-emerald-primary] hover:bg-emerald-700 text-white px-8 py-4 rounded-full font-medium transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Get Directions
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-12 bg-gradient-to-br from-[--color-emerald-primary] to-emerald-800 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center space-y-4">
            <p class="text-3xl font-cursive text-[--color-gold]">With love,</p>
            <p class="text-2xl font-serif">Richard & Peace ❤️</p>
            <p class="text-sm text-gray-300 mt-8">© {{ date('Y') }} All rights reserved</p>
        </div>
    </div>
</footer>
@endsection
