<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donativo extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function ong()
    {
        return $this->belongsTo(Ong::class,'ong_id','id');
    }
}
