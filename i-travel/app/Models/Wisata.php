<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'nama_wisata',
        'gambar',
        'deskripsi',
        'lokasi',
        'date',
        'created_at',
        'updated_at'
    ];
    public function transportasi(){
        return $this->belongsTo(Transportasi::class);
    }
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
}
