<x-layouts.main>
    <x-forms.form method="PATCH" action="/holidays/{{ $holiday->id }}">

        <x-forms.input name="name" value="{{ $holiday->name }}" label="Holiday Name" />
        <x-forms.input name="date" value="{{ $holiday->date }}" type="date" label="Holiday date" />

        <x-forms.divider />

        <x-forms.input name="email_template[title]" value="{{ $holiday->email_template['title'] ?? '' }}" label="Email Title" />
        <x-forms.textarea name="email_template[body]" label="Email body"
            placeholder="Proceed with email body, Email head and footer is included automatically">
            {{ $holiday->email_template['body'] ?? '' }}
        </x-forms.textarea>

        <x-forms.button class="text-white">Save</x-forms.button>
    </x-forms.form>
</x-layouts.main>
