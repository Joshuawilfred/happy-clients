<x-layouts.main>
    <h2 class="font-bold text-lg">
        {{ $client->name }}
    </h2>
    <p>
        This client's Birthday is on {{ $client->birthday }}
    </p>
    <br>
    <a href="/clients">
        <x-buttons.neutral-btn>
            Back
        </x-buttons.neutral-btn>
    </a>
</x-layouts.main>
