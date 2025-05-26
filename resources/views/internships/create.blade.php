<x-base-layout>
    <h1>Nieuwe stage toevoegen</h1>

    @if ($errors->any())
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/internships" method="POST">
        @csrf

        <label for="title">Titel</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') }}"><br><br>

        <label for="description">Beschrijving</label><br>
        <textarea name="description" id="description">{{ old('description') }}</textarea><br><br>

        <label for="start_date">Startdatum</label><br>
        <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}"><br><br>

        <label for="end_date">Einddatum</label><br>
        <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}"><br><br>

        <label for="hours_per_week">Uren per week</label><br>
        <input type="number" name="hours_per_week" id="hours_per_week" value="{{ old('hours_per_week') }}"><br><br>

        <label for="compensation">Vergoeding</label><br>
        <input type="text" name="compensation" id="compensation" value="{{ old('compensation') }}"><br><br>

        <label for="type">Type</label><br>
        <input type="text" name="type" id="type" value="{{ old('type') }}"><br><br>

        <label for="bedrijf">Bedrijf</label><br>
        <select name="company_id">
            @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select><br><br>

        <div>
            <label for="educations">Opleiding:</label>
            <select id="educations" name="educations[]" multiple>
                @foreach ($educations as $education)
                <option value="{{ $education->id }}">{{ $education->name }}</option>
                @endforeach
            </select>
        </div>
        <br><br>


        <label for="level_of_education">Opleidingsniveau</label><br>
        <input type="text" name="level_of_education" id="level_of_education" value="{{ old('level_of_education') }}"><br><br>

        <button type="submit">Opslaan</button>
    </form>
</x-base-layout>