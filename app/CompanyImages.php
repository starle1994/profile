<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyImages extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'companyimages';
    
    protected $fillable = [
          'name',
          'description',
          'image'
    ];
    

    public static function boot()
    {
        parent::boot();

        CompanyImages::observe(new UserActionsObserver);
    }
    
    
    
    
}