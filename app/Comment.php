<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //マスアサインメントを許可するカラムを指定
    protected $fillable = ['author', 'text'];
}
