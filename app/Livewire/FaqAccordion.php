<?php

namespace App\Livewire;

use Livewire\Component;

class FaqAccordion extends Component
{
    public array $faqs = [];

    public function mount(): void
    {
        $this->faqs = [
            [
                'question' => 'Can I bring a date?',
                'answer' => 'If they\'re your soulmate, yes. If they\'re your third social media date, maybe not. Check your invite!',
            ],
            [
                'question' => 'Are kids welcome?',
                'answer' => 'Absolutely! We love little ones and would be happy to have them join the celebration.',
            ],
            [
                'question' => 'Where should I park?',
                'answer' => 'Worry Less!',
            ],
            [
                'question' => 'What should I wear?',
                'answer' => 'See dress code above.',
            ],
            [
                'question' => 'Is the wedding indoors or outdoors?',
                'answer' => 'Our wedding ceremony is outdoors 😁',
            ],
            [
                'question' => 'Is it okay to take pictures?',
                'answer' => 'Yes! Please take photos and share with us later.',
            ],
            [
                'question' => 'Do I have to dance?',
                'answer' => 'It\'s not mandatory, but peer pressure is real. Aunties will drag you!',
            ],
            [
                'question' => 'Whom should I call with questions?',
                'answer' => 'Emmanuella Avornyo – 0535624657, Austin Kpatsa – 0531430929, Raphael Sefakor Adinkrah – 0548828183',
            ],
            [
                'question' => 'Is there a gift registry?',
                'answer' => 'Feel free to check our Registry 😁❤️ and support us in any way you can.',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.faq-accordion');
    }
}
