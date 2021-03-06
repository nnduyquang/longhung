<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
        'name', 'content', 'user_id', 'created_at', 'updated_at'
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
