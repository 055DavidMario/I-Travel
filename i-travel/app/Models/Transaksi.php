<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tiket(){
        return $this->belongsTo(Tiket::class);
    }
    public function harga(){
        return $this->belongsTo(Harga::class);
    }
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
}
