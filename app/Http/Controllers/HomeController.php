<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class HomeController extends Controller
{
    public function index(){

        $pages = Page::all();

        $pageDetail = Page::where('id', 1)->first();

        return view("home", ['pages' => $pages, 'pageDetail'=> $pageDetail]);

    }


    public function page($pageID){

        $pages = Page::all();

        $pageDetail = Page::where('id', $pageID)->first();

        return view("home", ['pages' => $pages, 'pageDetail'=> $pageDetail]);



    }
}
