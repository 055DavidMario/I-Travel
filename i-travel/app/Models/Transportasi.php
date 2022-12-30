<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public function wisata(){
        return $this->hasMany(Wisata::class);
    }
    public function tiket(){
        return $this->hasMany(Tiket::class);
    }
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
}
