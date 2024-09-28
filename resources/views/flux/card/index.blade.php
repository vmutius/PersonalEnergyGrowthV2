@php
    $classes = Flux::classes()
        ->add('p-6 rounded-xl')
        ->add('bg-neutral-100 dark:bg-neutral/10')
        ->add('border border-neutral-200');
@endphp

<div {{ $attributes->class($classes) }} data-flux-card>
    {{ $slot }}
</div>
