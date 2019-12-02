<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'answers';
    protected $fillable=[
        'answer_name',
        'correct_answer',
        'question_id',
    ];

      /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'correct_answer',
    // ];

    public static $rules = array(
        'answer_name' => 'required|min:2|max:255',
    );

    public function questions(){
        return $this->belongsTo('App\Question');
    }

}
