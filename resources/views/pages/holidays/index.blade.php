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
                @foreach ($holidays as $holiday)
                    <x-tables.row>
                        <x-tables.data>{{ $holiday->name }}</x-tables.data>
                        <x-tables.data>{{ $holiday->date }}</x-tables.data>
                        <x-tables.data>
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
                        </x-tables.data>
                    </x-tables.row>
                @endforeach
            </x-tables.body>
        </x-tables.table>
    </div>
</x-layouts.main>
