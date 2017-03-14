<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class MySchedule extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'myschedule';
    
    protected $fillable = [
          'name_event',
          'start_time',
          'end_time',
          'color'
    ];
    

    public static function boot()
    {
        parent::boot();

        MySchedule::observe(new UserActionsObserver);
    }
    
    
    
    /**
     * Set attribute to datetime format
     * @param $input
     */
    


}