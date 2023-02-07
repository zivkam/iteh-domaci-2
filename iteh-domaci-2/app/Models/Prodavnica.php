<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Magacin;

class Prodavnica extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'website',
        'godina',
        'email'
    ];


    public function magacini(){
        return $this->hasMany(Magacin::class);
    }

}
