<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_list extends Model
{
    public $timestamps      = false;
    protected $table        = "user_list";
    protected $primaryKey   = "id";
    protected $fillable     = ['id','username','user_access_id','password', 'access_level'];


    public function user_access()
    {
        return $this->belongsTo(User_access::class);
    }
}
