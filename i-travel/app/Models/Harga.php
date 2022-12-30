<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1

class Harga extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'hargas';
    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function tiket(){
        return $this->hasOne(Tiket::class);
    }
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
}
