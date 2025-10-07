<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RsvpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Rsvp::factory()->count(10)->create();
    }
}
