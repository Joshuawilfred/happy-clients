<x-layouts.main>
    <div class="flex flex-col items-center justify-center h-full text-center">
        <h1 class="text-9xl font-bold text-purple-600">429</h1>
        <p class="text-2xl md:text-3xl font-light mb-4">
            Too many requests.
        </p>
        <p class="text-md md:text-lg mb-8">
            Please slow down and try again later.
        </p>
        <a href="{{ url('/') }}" class="px-4 py-2 bg-purple-600 text-white rounded-md shadow hover:bg-purple-700 transition duration-300">
            Go to Homepage
        </a>
    </div>
</x-layouts.main>
