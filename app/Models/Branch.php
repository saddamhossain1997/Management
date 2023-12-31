<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }


    // Relationship with the Account model
    public function accounts()
    {
        return $this->hasMany(Account::class, 'branch_id');
    }
}
