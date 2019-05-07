<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
//         protected $table = 'Roles';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
