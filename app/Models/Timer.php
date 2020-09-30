<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Timer extends Model
{
    protected $fillable = [
        'user_id', 'title', 'started_at', 'ended_at'
    ];
    protected $dates = [ 'started_at', 'ended_at'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
