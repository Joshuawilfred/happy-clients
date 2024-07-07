<x-layouts.main>
    <div class="flex flex-col items-center justify-center h-full text-center">
        <h1 class="text-9xl font-bold text-blue-600">404</h1>
        <p class="text-2xl md:text-3xl font-light mb-4">
            Sorry, we couldn't find this page.
        </p>
        <p class="text-md md:text-lg mb-8">
            But don't worry, you can find plenty of other things on our homepage.
        </p>
        <a href="{{ url('/') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700 transition duration-300">
            Go to Homepage
        </a>
    </div>
</x-layouts.main>
