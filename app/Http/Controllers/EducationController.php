<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Education;

class EducationController extends Controller
{
   

    public function index()
    {
        // $internships = DB::table('internships')->get();
        $educations = Education::all();
        return view('educations.index', compact('educations'));
    }
    // public function show($id)
    // {
    //     $education = DB::table('educations')->find($id);
    //     return view('educations.show', compact('education'));
    // }

    public function show($id)
    {
        // $internship = DB::table('internships')->find($id);
        $education = Education::find($id);
        return view('educations.show', compact('education'));
    }

    public function create()
    {
        return view('educations.create');
    }

   public function store(Request $request)
    {
        // Valideer de gegevens
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'level' => 'required',
            'duration' => 'required',
        ]);

       

        // Voeg de opleiding toe aan de database
        DB::table('educations')->insert([
            'name' => $request->name,
            'slug'  => Str::slug($request->name),
            'description' => $request->description,
            'level' => $request->level,
            'duration' => $request->duration,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect naar de educations pagina
        return redirect('/educations');
    }

    public function edit($id)
    {
        $education = DB::table('educations')->find($id);
        return view('educations.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        // Valideer de gegevens
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'level' => 'required',
            'duration' => 'required',
        ]);

        // Genereer de slug uit de naam
        $slug = Str::slug($request->name);

        // Update de opleiding in de database
        DB::table('educations')->where('id', $id)->update([
            'name' => $request->name,
            'slug' => $slug, // De slug is nu ingevuld
            'description' => $request->description,
            'level' => $request->level,
            'duration' => $request->duration,
            'updated_at' => now(),
        ]);

        // Redirect naar de educations pagina
        return redirect('/educations');
    }

    public function destroy($id)
    {
        // Verwijder de opleiding uit de database
        DB::table('educations')->where('id', $id)->delete();

        // Redirect naar de educations pagina
        return redirect('/educations');
    }
}
