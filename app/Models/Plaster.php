<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plaster extends Model
{
    use HasFactory;
    public function PlasterExtra()
    {
        return $this->hasOne(PlasterExtraCost::class);
    }
}
