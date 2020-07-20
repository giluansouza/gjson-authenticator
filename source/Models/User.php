<?php

namespace DevBoot\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = [
	    'name',
        'email',
        'password',
        'code_authenticator'
	];
}
