<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class DreamImages extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'dreamimages';
    
    protected $fillable = [
          'name',
          'description',
          'image',
          'dreams_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        DreamImages::observe(new UserActionsObserver);
    }
    
    public function dreams()
    {
        return $this->hasOne('App\Dreams', 'id', 'dreams_id');
    }


    
    
    
}