<x-base-layout>
    <h1>Opleidingen</h1></br>
    <ul>
        @foreach ($educations as $education)
            <li>
                <h2>
                    <a href="{{ route('educations.show', $education->id) }}">
                        {{ $education->name }}
                    </a>
                </h2>
                <p>{{ Str::limit($education->description, 100) }}</p>
            </li></br>
        @endforeach
    </ul>
</x-base-layout>
