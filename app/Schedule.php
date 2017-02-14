<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'schedule';
    
    protected $fillable = ['content'];
    

    public static function boot()
    {
        parent::boot();

        Schedule::observe(new UserActionsObserver);
    }
    
    
    
    
}