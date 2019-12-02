<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'marks';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }

    public function marks()
    {
        return $this->hasMany('App\mark');
    }
}
