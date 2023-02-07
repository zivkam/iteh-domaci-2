<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prodavnica;
use App\Models\Grad;

class Magacin extends Model
{
    use HasFactory;

    public function prodavnica(){
        return $this->belongsTo(Prodavnica::class);
    }

    public function grad(){
        return $this->belongsTo(Grad::class);
    }


}
