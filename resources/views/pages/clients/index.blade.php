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
                @foreach ($clients as $client)
                    <x-tables.row>
                        <x-tables.data>
                            <span class="font-bold text-primary text-sm">{{ $client->name }}</span>
                        </x-tables.data>

                        <x-tables.data>
                            {{ $client->email }}
                        </x-tables.data>

                        <x-tables.data>
                            {{ $client->birthday }}
                        </x-tables.data>

                        <x-tables.data>
                            <a href="clients/{{ $client->id }}">
                                <x-buttons.neutral-btn>View</x-buttons.neutral-btn>
                            </a>
                        </x-tables.data>
                    </x-tables.row>
                @endforeach
            </x-tables.body>
        </x-tables.table>
    </div>
</x-layouts.main>
