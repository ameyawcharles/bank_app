<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bankaccount extends Model
{
    protected $fillable = ['account_name', 'account_number', 'bank_name', 'bank_branch'];
}
