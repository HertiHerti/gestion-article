<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = ['titre','slug','content','online'];

    public function scopePublished($query){
        return $query->where('online',1);
    }

    public function getRouteKeyName(){
        return "slug";
    }

}
