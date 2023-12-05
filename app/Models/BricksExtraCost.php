<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BricksExtraCost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bricksModel()
    {
        return $this->belongsTo(Brick::class);
    }
}
