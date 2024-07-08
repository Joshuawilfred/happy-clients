<x-layouts.main>
    <x-forms.form method="POST" action="/holidays">

        <x-forms.input name="name" label="Holiday Name"  placeholder="eg. New Year"/>
        <x-forms.input name="date" type="date" label="Holiday date" />

        <x-forms.divider />

        <x-forms.input name="email_template[title]" label="Email Title" placeholder="eg. Happy New Year" />
        <x-forms.textarea name="email_template[body]" label="Email body"
            placeholder="Proceed with email body, Email head and footer is included automatically" />

        <x-forms.button class="text-white">Save</x-forms.button>
    </x-forms.form>
</x-layouts.main>
