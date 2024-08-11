<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllTicketAdmin extends Model
{
    use HasFactory;

    protected $table = 'allticketsadmin';

    protected $fillable = [
        'userid',
        'msgdata',
        'date',
        'mindate',
        'time',
        'status',
        'username',
        'userrole',
        'schoolname'
    ];
}
