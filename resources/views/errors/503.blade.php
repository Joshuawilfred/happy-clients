<x-layouts.main>
    <div class="flex flex-col items-center justify-center h-full text-center">
        <h1 class="text-9xl font-bold text-orange-600">503</h1>
        <p class="text-2xl md:text-3xl font-light mb-4">
            The service is currently unavailable.
        </p>
        <p class="text-md md:text-lg mb-8">
            We're undergoing maintenance. Please check back soon.
        </p>
        <a href="{{ url('/') }}" class="px-4 py-2 bg-orange-600 text-white rounded-md shadow hover:bg-orange-700 transition duration-300">
            Go to Homepage
        </a>
    </div>
</x-layouts.main>
