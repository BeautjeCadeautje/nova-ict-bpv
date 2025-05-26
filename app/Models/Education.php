<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Internship; // 👈 deze toevoegen

class Education extends Model
{
    protected $table = 'educations'; // niet verplicht als je naam correct is, maar voor de zekerheid

    public function internships()
    {
        return $this->belongsToMany(Internship::class);
    }
}
