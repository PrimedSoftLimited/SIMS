<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'instructions';
    protected $fillable=[
        'instruction_name',
        'instruction_audio',
        'question_id',
    ];

    public static $rules = array(
        'answer_name' => 'required|min:2|max:255',
    );

    public function questions(){
        return $this->belongsTo('App\Question');
    }

    public function options(){
        return $this->hasMany('App\Option');
    }
}
