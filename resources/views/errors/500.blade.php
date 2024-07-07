<x-layouts.main>
    <div class="flex flex-col items-center justify-center h-full text-center">
        <h1 class="text-9xl font-bold text-yellow-600">500</h1>
        <p class="text-2xl md:text-3xl font-light mb-4">
            Oops! Something went wrong on our end.
        </p>
        <p class="text-md md:text-lg mb-8">
            Please try again later or contact support if the issue persists.
        </p>
        <a href="{{ url('/') }}" class="px-4 py-2 bg-yellow-600 text-white rounded-md shadow hover:bg-yellow-700 transition duration-300">
            Go to Homepage
        </a>
    </div>
</x-layouts.main>
