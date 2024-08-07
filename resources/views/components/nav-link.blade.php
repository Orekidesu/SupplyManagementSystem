@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'block w-full  py-2 pl-2  font-medium text-text bg-accent focus:outline-none focus:text-primary focus:bg-secondary  focus:border-none transition duration-500 ease-in-out'
            : 'block w-full  py-2 pl-2 border-transparent font-medium text-accent hover:text-primary hover:bg-text hover:border-secondary focus:outline-none focus:text-primary focus:bg-background focus:border-secondary transition duration-500 ease-in-out';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
