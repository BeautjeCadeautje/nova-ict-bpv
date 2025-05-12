<x-base-layout>
    <h1>{{ $internship->title }}</h1>

    <p><strong>Startdatum:</strong> {{ $internship->start_date }}</p>
    <p><strong>Einddatum:</strong> {{ $internship->end_date ?? 'n.v.t.' }}</p>
    <p><strong>Type:</strong> {{ $internship->type }}</p>
    <p><strong>Uren per week:</strong> {{ $internship->hours_per_week }}</p>
    <p><strong>Compensatie:</strong> {{ $internship->compensation ?? 'n.v.t.' }}</p>
    <p><strong>Opleidingsniveau:</strong> {{ $internship->level_of_education }}</p>
    <p><strong>Aangemaakt op:</strong> {{ $internship->created_at }}</p>
    <p><strong>Laatst bijgewerkt:</strong> {{ $internship->updated_at ?? 'n.v.t.' }}</p>

    <a href="{{ route('internships.index') }}">← Terug naar overzicht</a>
</x-base-layout>
