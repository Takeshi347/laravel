<h1>O primeiro valor é: {{ $p1 }}</h1>
<h1>O segundo valor é: {{ $p2 }}</h1>
kiss - keep it simple stupid (mantenha isso estupidamente simples)

<!-- @if (arroba) para identificar que está dentro do blade e não dentro de um html -->
@if ($p1 < 0 || $p2 < 0)
    <h1>Não é permitido valor menor que 0</h1>

@elseif (@if $p1 == 0 || $p2 == 0 )
    <h1>Não é permitido valor igual a 0</h1>

@else
<h1>O resultado da soma é: {{ $p1 + $p2 }}</h1>
@endif
