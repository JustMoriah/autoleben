<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='user';
    protected $fillable = [
        'username',
        'email',
        'password',
        'name',
        'surname',
        'birthdate',
        'telephone',
        'license_number'
    ];
    protected $primaryKey = 'id';
}
