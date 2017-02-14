<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Videos extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'myvideos';
    
    protected $fillable = [
          'name',
          'description',
          'link'
    ];
    

    public static function boot()
    {
        parent::boot();

        Videos::observe(new UserActionsObserver);
    }
    
    
    
    
}