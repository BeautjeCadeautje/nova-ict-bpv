<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company; // 👈 deze toevoegen
use App\Models\Education; // 👈 deze toevoegen

class Internship extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'start_date',
        'end_date',
        'hours_per_week',
        'type',
        'compensation',
        'level_of_education',
        'company_id',
        'created_at',
        'updated_at'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

     public function educations()
    {
        return $this->belongsToMany(Education::class);
    }
}
