<x-base-layout>
    <h1>{{ $education->name }}</h1></br>

    <p><strong>Beschrijving:</strong></p>
    <p>{{ $education->description ?? 'Geen beschrijving beschikbaar.' }}</p></br>



    <a href="{{ route('educations.index') }}">← Terug naar overzicht</a>
</x-base-layout>
