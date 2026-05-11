<x-app-layout>
    <x-slot name="header">
        <h2>Panel Principal</h2>
    </x-slot>

    <div style="padding: 30px;">
        <h3>Sistema de Gestión de Liga de Básquetbol</h3>
        <p>Seleccione un módulo para administrar la información de la liga.</p>

        <ul>
            <li><a href="{{ route('equipos.index') }}">Gestión de equipos</a></li>
            <li><a href="{{ route('jugadores.index') }}">Gestión de jugadores</a></li>
            <li><a href="{{ route('partidos.index') }}">Registro de partidos</a></li>
            <li><a href="{{ route('estadisticas.index') }}">Estadísticas básicas</a></li>
        </ul>
    </div>
</x-app-layout>
