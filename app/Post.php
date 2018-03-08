<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // name
    protected $table = 'posts';
    // primary key
    public $primarykey = 'id';
    //Time
    public $timestamps = true;
}
