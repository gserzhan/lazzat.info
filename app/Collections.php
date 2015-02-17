<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

use Illuminate\Database\Eloquent\Model;

class Collections extends Model {

    protected $table = 'collections';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'description', 'image');
    protected $required = array('name', 'description', 'image');


}