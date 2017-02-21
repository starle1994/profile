<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Dreams extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'dreams';
    
    protected $fillable = [
          'name',
          'description',
          'image',
          'alias'
    ];
    

    public static function boot()
    {
        parent::boot();

        Dreams::observe(new UserActionsObserver);
    }
     
     public function images()
    {
        return $this->hasMany('App\DreamImages', 'dreams_id', 'id');
    }
    
    
    
    
}