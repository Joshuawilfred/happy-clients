<x-layouts.main>
    <section>
        <h2 class="px-3 text-kichwa-cha-habari">Birthday Emails for This Month</h2>
        <div>
            <x-tables.table>
                <x-tables.head>
                    <x-tables.row>
                        <x-tables.heading>Name</x-tables.heading>
                        <x-tables.heading>Email</x-tables.heading>
                        <x-tables.heading>Birthday</x-tables.heading>
                        <x-tables.heading>Status</x-tables.heading>
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
                                @if ($client->email_sent === 0)
                                    <x-buttons.danger-btn> Not Sent </x-buttons.danger-btn>
                                @else
                                    <x-buttons.success-btn> Sent</x-buttons.success-btn>
                                @endif
                            </x-tables.data>
                        </x-tables.row>
                    @endforeach
                </x-tables.body>
            </x-tables.table>
        </div>
    </section>

    <br><br>

    <section>
        <h2 class="px-3 text-kichwa-cha-habari">Upcoming Holidays</h2>
        <div>
            <x-tables.table>
                <x-tables.head>
                    <x-tables.row>
                        <x-tables.heading>Name</x-tables.heading>
                        <x-tables.heading>Date</x-tables.heading>
                        <x-tables.heading>Status</x-tables.heading>
                    </x-tables.row>
                </x-tables.head>
                <x-tables.body>
                    @foreach ($holidays as $holiday)
                        <x-tables.row>
                            <x-tables.data>
                                <span class="font-bold text-primary text-sm">{{ $holiday->name }}</span>
                            </x-tables.data>

                            <x-tables.data>
                                {{ $holiday->date }}
                            </x-tables.data>

                            <x-tables.data>
                                @if (2 + 2 == 0)
                                    <x-buttons.danger-btn> Not Sent </x-buttons.danger-btn>
                                @else
                                    <x-buttons.success-btn> Sent</x-buttons.success-btn>
                                @endif
                            </x-tables.data>
                        </x-tables.row>
                    @endforeach
                </x-tables.body>
            </x-tables.table>
        </div>
    </section>
</x-layouts.main>
<x-layouts.footer />
