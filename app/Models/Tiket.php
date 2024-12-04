<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "date",
        "location",
        "image",
        "description",
    ] ;

    public function kota ()
    {
       // belongto = hanya memiliki
        return $this->belongsTo(Kota::class, 'location');
    }
}
