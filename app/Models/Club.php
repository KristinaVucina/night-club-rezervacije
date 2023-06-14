<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','url','reservations_until','max_person_count','capacity','owner_id'];

    public function owner()
    {
        return $this->belongsTo(User::class,'owner_id');
    }
}
