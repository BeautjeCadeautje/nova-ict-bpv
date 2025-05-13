<x-base-layout>
    <h1>Nieuwe opleiding toevoegen</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/educations" method="POST">
        @csrf

        <label for="name">Naam</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}"><br><br>

        <label for="description">Beschrijving</label><br>
        <textarea name="description" id="description">{{ old('description') }}</textarea><br><br>

        <label for="level">Niveau</label><br>
        <input type="text" name="level" id="level" value="{{ old('level') }}"><br><br>

        <label for="duration">Duur</label><br>
        <input type="text" name="duration" id="duration" value="{{ old('duration') }}"><br><br>

        <button type="submit">Opslaan</button>
    </form>
</x-base-layout>
