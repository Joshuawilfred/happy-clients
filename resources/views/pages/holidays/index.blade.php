<x-layouts.main>
    <div>
        <div class="flex justify-between m-2 items-center">
            <span class="text-kichwa-cha-habari">Special Holidays</span>
            <a href="{{ route('holidays.create') }}"
                class="bg-primary font-bold rounded-md p-2 float-right text-white">Add new</a>
        </div>
        <x-tables.table>
            <x-tables.head>
                <x-tables.row>
                    <x-tables.heading>Name</x-tables.heading>
                    <x-tables.heading>Date</x-tables.heading>
                    <x-tables.heading>Actions</x-tables.heading>
                </x-tables.row>
            </x-tables.head>
            <x-tables.body>
                @if ($holidays->isNotEmpty())
                    @foreach ($holidays as $holiday)
                        <x-tables.row>
                            <x-tables.cell>{{ $holiday->name }}</x-tables.cell>
                            <x-tables.cell>{{ $holiday->date }}</x-tables.cell>
                            <x-tables.cell>
                                <div class="flex gap-4">
                                    <a href="{{ route('holidays.edit', $holiday) }}">
                                        <x-buttons.neutral-btn>
                                            Edit
                                        </x-buttons.neutral-btn>
                                    </a>
                                    <form action="{{ route('holidays.destroy', $holiday) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <x-buttons.danger-btn>
                                            <button type="submit">
                                                Delete
                                            </button>
                                        </x-buttons.danger-btn>
                                    </form>
                                </div>
                            </x-tables.cell>
                        </x-tables.row>
                    @endforeach
                @else
                    <x-tables.empty-table tittle="No Holiday" message="Create a holiday to get started" />
                @endif
            </x-tables.body>
        </x-tables.table>
    </div>
</x-layouts.main>
