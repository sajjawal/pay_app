<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllTicket extends Model
{
    use HasFactory;

    protected $table = 'alltickets';

    protected $fillable = [
        'userid',
        'msgdata',
        'date',
        'mindate',
        'time',
        'status',
        'username',
        'userrole'
    ];
}
