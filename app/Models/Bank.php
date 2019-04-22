<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $fillable = ['name', 'account_name', 'account_number', 'account_branch', 'status'];
}
