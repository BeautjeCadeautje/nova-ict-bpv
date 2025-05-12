<x-base-layout>
    <h1>Internships</h1>
    <ul>
        @foreach ($internships as $internship)
            <li>
                <h2>
                    <a href="{{ route('internships.show', $internship->id) }}">
                        {{ $internship->title }}
                    </a>
                </h2>
                <p><strong>Startdatum:</strong> {{ $internship->start_date }}</p>
                <p><strong>Einddatum:</strong> {{ $internship->end_date ?? 'n.v.t.' }}</p>
                <p><strong>Type:</strong> {{ $internship->type }}</p>
                <p><strong>Uren per week:</strong> {{ $internship->hours_per_week }}</p>
            </li></br>
        @endforeach
    </ul>
</x-base-layout>
