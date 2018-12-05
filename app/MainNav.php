<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainNav extends Model
{
    protected $table = 'main_nav';

    public $timestamps = false;

    public function items() {
      return $this->hasMany('App\SubNav', 'main_nav_id', 'id');
    }

    // used so these don't get exposed as JSON
    protected $hidden = ['id'];

}
