<x-base-layout>
    <h1>Stage bewerken</h1>

   <form action="/internships/{{ $internship->id }}" method="POST">
   @csrf
   @method('PUT')
   <label for="title">Title</label>
   <input type="text" name="title" id="title" value="{{ $internship->title }}"></br>
   <label for="description">Description</label>
   <textarea name="description" id="description">{{ $internship->description }}</textarea></br>
   <label for="start_date">Start Date</label></br>
   <input type="date" name="start_date" id="start_date" value="{{ $internship->start_date }}"></br>
   <label for="end_date">End Date</label></br>
   <input type="date" name="end_date" id="end_date" value="{{ $internship->end_date }}"></br>
   <label for="hours_per_week">Hours per Week</label></br>
   <input type="number" name="hours_per_week" id="hours_per_week" value="{{ $internship->hours_per_week }}"></br>
   <label for="compensation">Compensation</label></br>
   <input type="text" name="compensation" id="compensation" value="{{ $internship->compensation }}"></br>
   <label for="type">Type</label></br>
   <input type="text" name="type" id="type" value="{{ $internship->type }}"></br>
   <label for="level_of_education">Level of Education</label></br>
   <input type="text" name="level_of_education" id="level_of_education" value="{{ $internship->level_of_education }}"></br>
   <button type="submit">Submit</button>
</form>
</x-base-layout>
