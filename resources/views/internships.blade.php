<x-base-layout>
    <h1>internships</h1>
    <ul>
        @foreach ($internships as $internship)
        <li>
            <h2>{{$internship->title }}</h2>
            <p>{{ $internship->start_date }}</p>
            <p>{{ $internship->end_date }}</p>
        </li>
        @endforeach
    </ul>
</x-base-layout>