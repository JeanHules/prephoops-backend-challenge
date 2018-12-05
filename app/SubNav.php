<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubNav extends Model
{
  protected $table = 'sub_nav';

  public $timestamps = false;

  public function parent() {
    return $this->belongsTo('App\MainNav', 'main_nav_id', 'id');
  }
  // used so these don't get exposed as JSON
  protected $hidden = ['id', 'main_nav_id'];

}
