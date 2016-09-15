<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
<<<<<<< HEAD
    //
    protected $table = 'users';
    //protected $primaryKey = 'user_id';
=======
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];	
>>>>>>> 8f5adb71b45481655592e1ffe7cf653c566605d9
}
