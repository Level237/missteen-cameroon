<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

    protected $fillable=[
        'isPaid',
        'candidate_id',
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
