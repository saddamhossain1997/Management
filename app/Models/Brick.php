<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brick extends Model
{
    use HasFactory;

    public function BricksExtra()
    {
        return $this->hasOne(BricksExtraCost::class);
    }
}
