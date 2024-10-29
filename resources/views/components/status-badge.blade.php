@props(['status'])

@php
    $color = match($status) {
        'pending' => 'bg-yellow-100 text-yellow-800',
        'in_progress' => 'bg-blue-100 text-blue-800',
        'completed' => 'bg-green-100 text-green-800',
        default => 'bg-gray-100 text-gray-800'
    };

    $text = match($status) {
        'pending' => 'Pendiente',
        'in_progress' => 'En Progreso',
        'completed' => 'Completado',
        default => $status
    };
@endphp

<span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium {{ $color }}">
    <svg class="-ml-0.5 mr-1.5 h-2 w-2 {{ str_replace('text', 'text', $color) }}" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
    </svg>
    {{ $text }}
</span>
