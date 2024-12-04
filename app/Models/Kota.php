<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "provinsi",
        "image",
        "is_popular",
    ];
      public function tikets()
    {
        // hasmany = memiliki banyak product
        return $this->hasMany(Tiket::class);
    }
}
