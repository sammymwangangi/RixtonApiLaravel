<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [

        'url','project','verb','input'

    ];

    public function projects(){
        
        return $this->belongsTo('App\Project');
    }
}
