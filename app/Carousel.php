<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model {

    protected $table = 'carousel';
    public $timestamps = true;


    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'description', 'image', 'caption', 'link', 'active');

}
