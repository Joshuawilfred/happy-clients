<x-layouts.main>
    <div>
        <div class="flex justify-between m-2 items-center">
            <span>Registered Clients</span>
            <a href="/clients/create" class="bg-primary font-bold rounded-md p-2 float-right text-white">Add new</a>
        </div>
        <div class="grid gap-4">
            @foreach ($clients as $client)
                <a href="/clients/{{ $client['id'] }}"
                    class="hover:bg-secondary px-4 py-6 border border-border rounded-md">
                    <div class="font-bold text-primary text-sm">{{ $client->name }}</div>
                    <div>
                        <i class="bg-secondary px-1 rounded text-xs">{{ $client['email'] }}</i> Was born in : {{ $client['birthday'] }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layouts.main>
