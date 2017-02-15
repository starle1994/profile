<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Banners extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'banners';
    
    protected $fillable = [
          'name',
          'descrition',
          'image',
          'text',
          'alias',
    ];
    

    public static function boot()
    {
        parent::boot();

        Banners::observe(new UserActionsObserver);
    }
    
    
    
    
}