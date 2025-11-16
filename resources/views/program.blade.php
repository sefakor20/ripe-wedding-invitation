<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Program - Richard & Peace</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/ripe-logo.jpeg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }

        .pdf-viewer {
            width: 100%;
            height: 80vh;
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        @media (max-width: 768px) {
            .pdf-viewer {
                height: 60vh;
            }
        }
    </style>
</head>

<body class="font-sans antialiased bg-gradient-to-br from-rose-50 to-pink-50 text-gray-800 min-h-screen">

    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="flex items-center gap-2 text-gray-700 hover:text-rose-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span class="font-medium">Back to Invitation</span>
                </a>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/ripe-logo.jpeg') }}" alt="RIPE Logo" class="w-8 h-8 rounded-full">
                    <span class="font-semibold text-gray-800">Wedding Program</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-3" style="font-family: 'Playfair Display', serif;">
                    Wedding Program
                </h1>
                <p class="text-lg text-gray-600 mb-2">
                    Richard & Peace
                </p>
                <p class="text-base text-gray-500">
                    View our wedding program outline below
                </p>
            </div>

            <!-- PDF Viewer -->
            <div class="bg-white rounded-lg shadow-lg p-4 sm:p-6 mb-6">
                <iframe
                    src="{{ asset('storage/RIPE-INVITATION.pdf') }}"
                    class="pdf-viewer"
                    title="Wedding Program PDF"
                    loading="lazy">
                    <p class="text-center text-gray-600 py-8">
                        Your browser does not support PDF viewing.
                        <a href="{{ route('program.download') }}" class="text-rose-600 hover:text-rose-700 underline">
                            Click here to download the program
                        </a>
                    </p>
                </iframe>
            </div>

            <!-- Download Button -->
            <div class="flex justify-center">
                <a href="{{ route('program.download') }}"
                   class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-rose-500 to-pink-500 hover:from-rose-600 hover:to-pink-600 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span>Download Program PDF</span>
                </a>
            </div>

            <!-- Additional Info -->
            <div class="mt-12 text-center text-sm text-gray-500">
                <p>Having trouble viewing the program? <a href="{{ route('program.download') }}" class="text-rose-600 hover:text-rose-700 underline">Download it here</a></p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-6 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-600 text-sm">
            <p>&copy; {{ date('Y') }} Richard & Peace. Made with love.</p>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
