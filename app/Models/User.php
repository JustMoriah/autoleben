<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
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
