<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','url','date','time_start','time_end','club_id', 'image_url', 'slug'];


    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
