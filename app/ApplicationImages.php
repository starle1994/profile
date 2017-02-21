<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicationImages extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'applicationimages';
    
    protected $fillable = [
          'image',
          'description',
          'applications_id',
          'name'
    ];
    

    public static function boot()
    {
        parent::boot();

        ApplicationImages::observe(new UserActionsObserver);
    }
    
    public function applications()
    {
        return $this->hasOne('App\App', 'id', 'applications_id');
    }


    
    
    
}