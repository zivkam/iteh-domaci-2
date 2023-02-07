<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Magacin;

class Grad extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'postanski_broj',
        'drzava'
    ];


    public function magacini(){
        return $this->hasMany(Magacin::class);
    }

}
