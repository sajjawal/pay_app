<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllUser extends Model
{
    use HasFactory;

    protected $table = 'allusers';

    protected $fillable = [
        'username',
        'schoolid',
        'schoolname',
        'email',
        'password',
        'role',
        'rolename',
        'number',
        'fathername',
        'bloodgroup',
        'token',
        'address',
        'profilepic',
        'dojoin',
        'salary',
        'specialization',
        'place',
        'userid',
        'rollno',
        'section_id',
        'class_id',
        'section_value',
        'class_value',
        'parent_id',
        'subject_id',
        'subject_lable',
        'is_delete',
        'pass_token',
        'add_date',
        'add_mindate',
        'dob',
        'dobmin',
        'gender',
        'isdiable',
        'doa',
        'doamin',
        'hobbies',
        'emergencynumber',
        'aadhar',
        'parents',
        'parentsoccupation',
        'annualIncom',
        'caste',
        'dobs',
        'qualification',
        'lastinstitutions',
        'experiece',
        'language',
        'lastschool',
        'classcompleted',
        'userotp',
        'isban',
        'categoryid',
        'api_key'
    ];
}
