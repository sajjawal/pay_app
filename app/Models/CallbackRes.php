<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallbackRes extends Model
{
    use HasFactory;

    protected $table = 'callback_res';

    protected $fillable = [
        'txnid',
        'date',
        'time',
        'is_success'
    ];
}
