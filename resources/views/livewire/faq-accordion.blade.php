<div class="space-y-4">
    @foreach($faqs as $index => $faq)
        <div x-data="{ open: false }" class="border-b border-gray-200">
            <button
                @click="open = !open"
                class="w-full text-left py-4 flex justify-between items-center hover:text-emerald-primary transition-colors"
            >
                <span class="font-medium text-lg">{{ $faq['question'] }}</span>
                <svg
                    class="w-5 h-5 transform transition-transform"
                    :class="{ 'rotate-180': open }"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div
                x-show="open"
                x-collapse
                class="pb-4 text-gray-600"
            >
                <p>{{ $faq['answer'] }}</p>
            </div>
        </div>
    @endforeach
</div>
