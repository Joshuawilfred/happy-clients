<x-layouts.main>
    <a href="/clients">
        <x-buttons.neutral-btn>
            Back
        </x-buttons.neutral-btn>
    </a>
    <br>
    <br>
    <h2 class="font-bold text-lg">
        {{ $client->name }}
    </h2>
    <p>
        This client's Birthday is on {{ $client->birthday }}
    </p>
    <br>
    <div>
        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <x-buttons.danger-btn>
                <button type="submit">
                    Delete
                </button>
            </x-buttons.danger-btn>
        </form>
        <a href="{{ route('clients.edit', $client) }}">
            <x-buttons.success-btn>
                Edit
            </x-buttons.success-btn>
        </a>
    </div>
</x-layouts.main>
