<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Group_Name',
        'Email',
        'Password',
        'Birth_Date',
        'Line_Id',
        'Phone_Number'
    ];
}
