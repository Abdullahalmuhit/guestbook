<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable = ['name', 'email', 'body', 'flagged_at'];
}


public function scopeIgnoreFlagged($query)
{
    return $query->where('flagged_at', null);
}