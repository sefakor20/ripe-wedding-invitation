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
                'answer' => 'Absolutely! We love little ones, and we\'d be so happy to have them join in the celebration. From tiny twirls on the dance floor to big smiles in the photos, they\'re part of the joy we\'re looking forward to.',
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
                'question' => 'Is it okay to take pictures with our phones and cameras during the wedding?',
                'answer' => 'Yes, please feel free to take photos. We\'d love to see the day through your eyes! Just be present, enjoy the moment, and don\'t forget to add to our Google Drive so we can relive the magic later.',
            ],
            [
                'question' => 'Do I have to dance?',
                'answer' => 'It\'s not mandatory, but peer pressure is a real thing. Aunties will drag you!',
            ],
            [
                'question' => 'Whom should I call with questions?',
                'answer' => 'Emmanuella Avornyo – 0535624657, Austin Kpatsa – 0531430929, Raphael Sefakor Adinkrah – 0548828183',
            ],
            [
                'question' => 'Is there a gift registry?',
                'answer' => 'Feel Free to check out our Registry 😁❤️!\n\nSupport our new life together by contributing to our registry, helping fund our honeymoon, or blessing us with cash so we don\'t start our marriage eating Indomie daily.',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.faq-accordion');
    }
}
