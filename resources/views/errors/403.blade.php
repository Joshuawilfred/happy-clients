<x-layouts.main>
    <div class="flex flex-col items-center justify-center h-full text-center">
        <h1 class="text-9xl font-bold text-red-600">403</h1>
        <p class="text-2xl md:text-3xl font-light mb-4">
            You do not have permission to access this page.
        </p>
        <p class="text-md md:text-lg mb-8">
            Please contact the administrator if you believe this is an error.
        </p>
        <a href="{{ url('/') }}" class="px-4 py-2 bg-red-600 text-white rounded-md shadow hover:bg-red-700 transition duration-300">
            Go to Homepage
        </a>
    </div>
</x-layouts.main>
