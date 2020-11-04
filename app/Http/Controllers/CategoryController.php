<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function show($id)
    {
        $category=Category::find($id);
        $filter=request()->input('sort');
        if($filter=='last') {
            $products = Product::where('category_id', $category->id)->take(12)->latest()->get();
        }
        elseif($filter=='asc') {
            $products = Product::where('category_id', $category->id)->orderBy('name', 'asc')->get();
        }
        elseif($filter=='desc') {
            $products = Product::where('category_id', $category->id)->orderBy('name', 'desc')->get();
        }
        elseif($filter=='high') {
            $products = Product::where('category_id', $category->id)->orderBy('price', 'desc')->get();
        }
        elseif($filter=='low') {
            $products = Product::where('category_id', $category->id)->orderBy('price', 'asc')->get();
        }
        else{
            $products = Product::where('category_id', $category->id)->get();
        }
        return view('template.category', ['category' => $category, 'products' => $products], ['categories' => \App\Models\Category::all()]);
    }

    public function create()
    {
        // shows a view to create a new resource
    }

    public function store()
    {
        // persists a new resource
        Category::create(request()->validate([
            'category' => 'required'
        ]));
        return redirect('/dashboard');
    }

    public function edit()
    {
        // shows a view to edit an existing resource
    }

    public function update()
    {
        // persists the edited resource
    }

    public function destroy(Request $request)
    {
        Category::destroy($request->input());
        return redirect('/dashboard');
    }
}
