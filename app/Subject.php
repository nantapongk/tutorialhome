<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
