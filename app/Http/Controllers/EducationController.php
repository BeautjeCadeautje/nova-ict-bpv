<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = DB::table('educations')->get();
        return view('educations', compact('educations'));
    }
}
