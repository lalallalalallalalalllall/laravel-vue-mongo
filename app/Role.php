<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Role extends Model
{
    //
    protected $connection = 'mongo_main';
    protected $collection = 't_role';  
}
