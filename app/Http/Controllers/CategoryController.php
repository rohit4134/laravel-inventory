<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = \App\Category::all();
        return view('categories.index')->with(['categories'=>$categories]);
    }

    public function create(){

return view('categories.create');


    }

public function store(Request $request){
    $input=$request->all();

    \App\Category::create($input);
    return redirect(url('categories'));
}

}
