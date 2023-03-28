<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_form extends Model
{
    use HasFactory;
    protected $table="job_forms";
    public $timestamps=true;

    protected  $fillable=[
        'name',
        'country',
        'email',
        'password',
        'date',
        'qualification',
        'state',
        'postcode',
        'experience',
        'city',
        'hobby',
        'phone',
        'radio',
        'address',
        'image',
        'ticket',
        'status',
    ];
}
