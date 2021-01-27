<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access_level extends Model
{
    public $timestamps      = false;
    protected $table        = "access_level";
    protected $primaryKey   = "id";
    protected $fillable     = ['id','username', 'password', 'access_level'];
}
