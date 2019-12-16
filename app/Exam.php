<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exams';
    protected $fillable=[
        'exam_name',
    ];
    
    public static $rules = array(
        'exam_name' => 'required|min:2|max:255',
    );
    
    public function questions(){
        return $this->hasMany('App\Question');
    }

    public function instructions(){
        return $this->hasMany('App\Instruction');
    }
}
