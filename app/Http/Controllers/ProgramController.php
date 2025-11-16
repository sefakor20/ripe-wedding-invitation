<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

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
    public function download(): BinaryFileResponse
    {
        $filePath = public_path('files/RIPE-INVITATION.pdf');

        if (! file_exists($filePath)) {
            abort(404, 'Program file not found.');
        }

        return response()->download($filePath, 'RIPE-Wedding-Program.pdf');
    }
}
