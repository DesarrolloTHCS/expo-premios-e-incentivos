@php
    $colores = [
        'azul' => '#213772',
        'verde' => '#117561',
        'naranja' => '#F26700',
        'azulado' => '#425E96',
        'verdeOscuro' => '#425424',
        'rojo' => '#9E1F0E',
    ];

    $colorCSS = $colores[$color] ?? '#d1d5db';
@endphp

<style>
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar {
        width: 10px;
        background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: {{ $colorCSS }};
        border-radius: 10px;
    }
</style>
