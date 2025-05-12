<x-base-layout>
    <h1>Nieuwe stage toevoegen</h1>

    <form action="/internships" method="POST">
        @csrf

        <label for="title">Titel</label><br>
        <input type="text" name="title" id="title"><br><br>


        <label for="start_date">Startdatum</label><br>
        <input type="date" name="start_date" id="start_date"><br><br>

        <label for="end_date">Einddatum</label><br>
        <input type="date" name="end_date" id="end_date"><br><br>

        <label for="hours_per_week">Uren per week</label><br>
        <input type="number" name="hours_per_week" id="hours_per_week"><br><br>

        <label for="compensation">Vergoeding</label><br>
        <input type="text" name="compensation" id="compensation"><br><br>

        <label for="type">Type</label><br>
        <input type="text" name="type" id="type"><br><br>

        <label for="level_of_education">Opleidingsniveau</label><br>
        <input type="text" name="level_of_education" id="level_of_education"><br><br>

        <button type="submit">Opslaan</button>
    </form>
</x-base-layout>
