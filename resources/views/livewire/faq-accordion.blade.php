<div class="space-y-3">
    @foreach ($faqs as $index => $faq)
        <div x-data="{ open: false }"
            class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 overflow-hidden">
            <button @click="open = !open"
                class="w-full text-left px-5 sm:px-6 py-4 sm:py-5 flex justify-between items-center hover:bg-emerald-50/30 transition-colors group">
                <span
                    class="font-semibold text-base sm:text-lg text-gray-800 group-hover:text-emerald-primary transition-colors pr-4">{{ $faq['question'] }}</span>
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 transform transition-transform duration-300 text-emerald-primary"
                        :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-y-0"
                x-transition:enter-end="opacity-100 transform scale-y-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-y-100"
                x-transition:leave-end="opacity-0 transform scale-y-0" class="px-5 sm:px-6 pb-4 sm:pb-5 origin-top">
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    {{ $faq['answer'] }}</p>
            </div>
        </div>
    @endforeach
</div>
