<?php

namespace App\Models;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=[
        'vote_id',
        'amount',
        'payment_type'
    ];

    public function vote(){
        return $this->belongsTo(Vote::class);
    }
}
