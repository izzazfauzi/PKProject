<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'description', 'completed', 'user_id'];

    public function steps() {
        return $this->hasMany(Step::class);
    }
}
