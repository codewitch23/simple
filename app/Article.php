<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function path(){
        return route('articles.show',$this);
    }
    protected $fillable=['title','excerpt','body'];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
