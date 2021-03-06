<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';
    protected $fillable=[
        'question_name',
        'question_image',
        'question_audio',
        'exam_id'
    ];
    
    public static $rules = array(
        'question_name' => 'required|min:2|max:255',
    );
    
    public function instructions(){
        return $this->hasMany('App\Instruction');
    }
}
