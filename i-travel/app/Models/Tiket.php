<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'tikets';
    public function harga(){
        return $this->hasOne(Harga::class,'id','id_harga');
    }
    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function transportasi(){
        return $this->belongsTo(Transportasi::class);
    }
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
}
