<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

use Illuminate\Database\Eloquent\Model;

class Art extends Model {

    protected $table = 'art';
    public $timestamps = true;


    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'credits', 'size', 'image', 'year', 'collection', 'type', 'price');
    protected $required = array('name', 'size', 'image', 'collection');

    public function Connection()
    {
        return $this->hasOne('Collections', 'collection');
    }

}