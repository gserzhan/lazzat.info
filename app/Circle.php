<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model {

    protected $table = 'circle';
    public $timestamps = true;


    protected $dates = ['deleted_at'];
    protected $fillable = array('caption', 'details', 'image', 'link');

}
