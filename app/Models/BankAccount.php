<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $table = 'bankaccount';

    protected $fillable = [
        'userid',
        'accountname',
        'upi',
        'bankaccountno',
        'targetdaily',
        'banknamevalue',
        'banknamelable',
        'statusvalue',
        'statuslable',
        'qrimage',
        'is_delete'
    ];
}
