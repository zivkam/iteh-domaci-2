<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Magacin;

class Grad extends Model
{
    use HasFactory;

    public function magacini(){
        return $this->hasMany(Magacin::class);
    }

}
