<x-base-layout>
    <h1>Opleiding bewerken</h1>

   <form action="/educations/{{ $education->id }}" method="POST">
   @csrf
   @method('PUT')
   <label for="name">Naam</label>
   <input type="text" name="name" id="name" value="{{ $education->name }}"></br>
   <label for="description">Description</label>
   <textarea name="description" id="description">{{ $education->description }}</textarea></br>
   <label for="level">Niveau</label></br>
   <input type="text" name="level" id="level" value="{{ $education->level }}"></br>
   <label for="duration">Duur</label></br>
   <input type="text" name="duration" id="duration" value="{{ $education->duration }}"></br>
   
   <button type="submit">Submit</button>
</form>
</x-base-layout>
