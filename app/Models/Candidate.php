<?php

namespace App\Models;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_name',
        'age',
        'phone_number',
        'city',
        'size',
        'score',
        'profile',
        'candidate_slug',
        'cv',
    ];

    public function votes(){
        return $this->hasMany(Vote::class);
    }
}
