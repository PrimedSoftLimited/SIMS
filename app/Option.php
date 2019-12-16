<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'options';
    protected $fillable=[
        'option_name',
        'instruction_id',
    ];

    public static $rules = array(
        'option_name' => 'required|min:2|max:255',
    );

    public function instructions(){
        return $this->belongsTo('App\Instruction');
    }

    public function answers(){
        return $this->hasMany('App\Answer');
    }
}
