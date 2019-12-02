<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';
    protected $fillable=[
        'question_name',
    ];
    
    public static $rules = array(
        'question_name' => 'required|min:2|max:255',
    );
    
    public function answers(){
        return $this->hasMany('App\Answer');
    }

    public function instructions(){
        return $this->hasMany('App\Instruction');
    }

}
