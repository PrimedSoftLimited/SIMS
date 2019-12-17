<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'marks';
    protected $fillable=[
        'answer',
        'exam_id',
        'question_id',
        'instruction_id',
        'option_id',
    ];

    public static $rules = array(
        'answer' => 'required|min:2|max:255',
    );

    public function instructions(){
        return $this->belongsTo('App\Option');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
