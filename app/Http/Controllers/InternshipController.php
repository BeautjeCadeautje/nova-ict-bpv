<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Company;
use App\Models\Education;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = Internship::with('company')->get();
        return view('internships.index', compact('internships'));
    }

    public function show($id)
    {
        // $internship = DB::table('internships')->find($id);
        $internship = Internship::find($id);
        return view('internships.show', compact('internship'));
    }

  
    public function create(Request $request)
    {
        $companies = Company::all();
        $educations = Education::all();
        return view('internships.create', compact('companies', 'educations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'hours_per_week' => 'required|numeric|min:1',
            'compensation' => 'required',
            'type' => 'required',
            'level_of_education' => 'required'

        ]);

        // DB::table('internships')->insert([
        Internship::create([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'hours_per_week' => $request->hours_per_week,
            'compensation' => $request->compensation,
            'type' => $request->type,
            'level_of_education' => $request->level_of_education
        ]);

        return redirect('/internships');
    }

    public function edit($id)
    {
        // $internship = DB::table('internships')->find($id);
        $internship = Internship::find($id);
        return view('internships.edit', compact('internship'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'hours_per_week' => 'required|numeric|min:1',
            'compensation' => 'required',
            'type' => 'required',
            'level_of_education' => 'required'
        ]);

        // $internship = DB::table('internships')->where('id', $id)->update([
        $internship = Internship::where('id', $id)->update([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'hours_per_week' => $request->hours_per_week,
            'compensation' => $request->compensation,
            'type' => $request->type,
            'level_of_education' => $request->level_of_education
        ]);

        return redirect('/internships');
    }

    public function destroy($id)
    {
        // $internship = DB::table('internships')->where('id', $id)->delete();
        $internship = Internship::where('id', $id)->delete();
        return redirect('/internships');
    }
}
