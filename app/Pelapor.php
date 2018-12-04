<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    //
    protected $table = 'pelapors';
    protected $fillable = ['user_id'];

    public function User()
    {
        return $this->hasOne('App\User');
    }

}
