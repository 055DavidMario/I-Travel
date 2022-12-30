<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public function users(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
}
