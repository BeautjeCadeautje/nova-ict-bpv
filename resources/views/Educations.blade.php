<x-base-layout>
    <h1>Educations</h1><br>
    <ul>
        @foreach ($educations as $education)
            <li>
                <h2>{{$education->name }}</h2>
                <p>{{ $education->slug }}</p>
                <p>{{ $education->description }}</p>
                </br>
            </li>
        @endforeach
    </ul>
</x-base-layout>