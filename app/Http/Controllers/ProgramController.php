<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ProgramController extends Controller
{
    /**
     * Display the program page.
     */
    public function show(): \Illuminate\View\View
    {
        return view('program');
    }

    /**
     * Download the program PDF.
     */
    public function download(): StreamedResponse
    {
        $filePath = 'RIPE-INVITATION.pdf';

        if (! Storage::disk('public')->exists($filePath)) {
            abort(404, 'Program file not found.');
        }

        return Storage::disk('public')->download($filePath, 'RIPE-Wedding-Program.pdf');
    }
}
