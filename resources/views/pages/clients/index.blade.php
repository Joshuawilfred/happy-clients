<x-layouts.main>
    <div>
        <div class="flex justify-between m-2 items-center">
            <span class="text-kichwa-cha-habari">Registered Clients</span>
            <a href="/clients/create" class="bg-primary font-bold rounded-md p-2 float-right text-white">Add new</a>
        </div>
        <x-tables.table>
            <x-tables.head>
                <x-tables.row>
                    <x-tables.heading>Name</x-tables.heading>
                    <x-tables.heading>Email</x-tables.heading>
                    <x-tables.heading>Birthday</x-tables.heading>
                    <x-tables.heading>Action</x-tables.heading>
                </x-tables.row>
            </x-tables.head>
            <x-tables.body>
                @if ($clients->isNotEmpty())
                    @foreach ($clients as $client)
                        <x-tables.row>
                            <x-tables.cell>
                                <span class="font-bold text-primary text-sm">{{ $client->name }}</span>
                            </x-tables.cell>

                            <x-tables.cell>
                                {{ $client->email }}
                            </x-tables.cell>

                            <x-tables.cell>
                                {{ $client->birthday }}
                            </x-tables.cell>

                            <x-tables.cell>
                                <a href="clients/{{ $client->id }}">
                                    <x-buttons.neutral-btn>View</x-buttons.neutral-btn>
                                </a>
                            </x-tables.cell>
                        </x-tables.row>
                    @endforeach
                @else
                    <x-tables.empty-table tittle="No Clients" message="Create a client to get started" />
                @endif
            </x-tables.body>
        </x-tables.table>
    </div>
</x-layouts.main>
