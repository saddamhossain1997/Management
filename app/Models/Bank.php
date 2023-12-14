<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function branches()
    {
        return $this->hasMany(Branch::class, 'bank_id');
    }


    // Relationship with the Account model
    public function accounts()
    {
        return $this->hasMany(Account::class, 'bank_id');
    }
}
