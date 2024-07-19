@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'p-2 border border-border w-full rounded-sm bg-accent',
        'cols' => '30',
        'rows' => '10',
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes->merge($defaults) }}>{{ $slot }}</textarea>
</x-forms.field>
