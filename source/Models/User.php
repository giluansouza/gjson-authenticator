<?php

namespace DevBoot\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public $timestamps = false;
    protected $fillable = [
	    'name',
        'email',
        'password',
        'code_authenticator'
	];
}
