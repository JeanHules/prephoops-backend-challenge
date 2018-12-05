<?php

namespace App\Http\Controllers;

use App\MainNav;
use Illuminate\Http\Request;

class NavController extends Controller
{
    // returns JSON of the navigation structures in reality PRETTY_PRINT would not be needed
    public function index() {
      return MainNav::with('items')->get()->values()->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}
