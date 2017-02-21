<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class PicturesProject extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'picturesproject';
    
    protected $fillable = [
          'name',
          'image',
          'description',
          'projects_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        PicturesProject::observe(new UserActionsObserver);
    }
    
    public function projects()
    {
        return $this->hasOne('App\Projects', 'id', 'projects_id');
    }


    
    
    
}