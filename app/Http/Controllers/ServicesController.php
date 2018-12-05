<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Service;
class ServicesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getData()
    {
        $sections = DB::select("select * from sections");
        $items = DB::select("select * from items");
        return view('data',[
            'sections'=>$sections,
            'items'=>$items,
        ]);
    }
}
