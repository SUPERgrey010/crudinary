<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_access extends Model
{
    protected $table        = "user_access";
    protected $primaryKey   = "id";
    protected $fillable     = ['id','user_level'];

    public function user_list()
    {
        return $this->hasMany(User_list::class);
    }
}
