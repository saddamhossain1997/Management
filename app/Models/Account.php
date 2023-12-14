<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = [];


    // Relationship with the Bank model
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }

    // Relationship with the Branch model
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
