<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasterExtraCost extends Model
{
    use HasFactory;
    public function plasterModel()
    {
        return $this->belongsTo(Plaster::class);
    }
}
