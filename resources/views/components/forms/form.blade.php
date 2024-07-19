@props(['method' => 'POST', 'action'])

@php
    $method = strtoupper($method);
    $spoofMethod = $method !== 'GET' && $method !== 'POST';
@endphp

<form {{ $attributes->merge(['class' => 'max-w-2xl mx-auto space-y-6']) }} method="POST" action="{{ $action }}">
    @csrf
    @if ($spoofMethod)
        @method($method)
    @endif

    {{ $slot }}
</form>
