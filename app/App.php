<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class App extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'app';
    
    protected $fillable = [
          'name',
          'description',
          'logo',
          'banner',
          'alias'
    ];
    

    public static function boot()
    {
        parent::boot();

        App::observe(new UserActionsObserver);
    }
    
    
     public function images()
    {
        return $this->hasMany('App\ApplicationImages', 'applications_id', 'id');
    }
    
}