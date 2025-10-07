<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    /** @use HasFactory<\Database\Factories\RsvpFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'response' => 'string',
        ];
    }

    protected $fillable = [
        'name',
        'phone',
        'response',
        'message',
    ];
}
