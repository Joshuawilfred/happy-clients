@props(['active' => false])
<a class="{{ $active ? 'bg-accent text-secondary-foreground' : 'text-muted-foreground hover:bg-primary hover:text-white' }} rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
