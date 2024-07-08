<x-layouts.main>

    <x-forms.form method="PATCH" action="/clients/{{ $client->id }}">
        <h1 class="text-2xl font-semibold">Edit Client</h1>
        <x-forms.input name="name" label="Name" value="{{ $client->name }}" />
        <x-forms.input name="email" label="Email" value="{{ $client->email }}" />

        <x-forms.divider />

        <x-forms.input name="birthday" type="date" label="Date of birth" value="{{ $client->birthday }}" />

        <x-forms.button class="text-white">Save</x-forms.button>
    </x-forms.form>
</x-layouts.main>
