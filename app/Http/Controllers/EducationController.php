<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = DB::table('educations')->get();
        return view('educations.index', compact('educations'));
    }

    public function show($id)
    {
        $education = DB::table('educations')->find($id);
        return view('educations.show', compact('education'));
    }
}
