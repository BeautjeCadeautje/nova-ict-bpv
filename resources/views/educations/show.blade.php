<x-base-layout>
    <h1>{{ $education->name }}</h1></br>

    <p><strong>Beschrijving:</strong></p>
    <p>{{ $education->description ?? 'Geen beschrijving beschikbaar.' }}</p></br>
    <p><strong>Niveau:</strong></p>
    <p>{{ $education->level ?? 'Geen niveau beschikbaar.' }}</p></br>
    <p><strong>Duur:</strong></p>
    <p>{{ $education->duration ?? 'Geen duur beschikbaar.' }}</p></br>
    



    <a href="{{ route('educations.index') }}">← Terug naar overzicht</a>
</x-base-layout>
