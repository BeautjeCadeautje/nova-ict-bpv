<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = DB::table('internships')->get();
        return view('internships.index', compact('internships'));
    }

    public function show($id)
    {
        $internship = DB::table('internships')->find($id);
        return view('internships.show', compact('internship'));
    }

    public function create()
    {
        return view('internships.create');
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

        DB::table('internships')->insert([
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
}
