<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
//use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param $category_id
     * @param $id
//     * @param \App\Models\Product $product
     * @return void
     */
    public function show($category_id, $id)
    {
        //
        $product=Product::find($id);
        return view('template.product', ['product' => $product], ['categories' => \App\Models\Category::all()]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        $cat_id=request()->where_category;
        if($cat_id=="all"){
            $products=Product::where(  'name', 'like', "%" . request()->input('search') . "%")->get();
        }
            else
                $products=Product::where('category_id', $cat_id)->where(  'name', 'like', "%" . request()->input('search') . "%")->get();
            return view('template.search', ['categories' => \App\Models\Category::all()], ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    protected function validator(Request $request)
    {
        return Validator::make((array)$request, [
            'name' => ['required'],
            'price' => ['required'],
            'material' => ['required'],
            'catalog_id' => ['required'],
            'description' => ['required'],
            'image_1' => ['image|required'],
            'image_2' => ['image'],
            'image_3' => ['image'],
            'image_4' => ['image'],
            'image_5' => ['image'],
            'image_6' => ['image']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){
        validator(array($request))->validate();
        $product=Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'material' => $request['material'],
            'category_id' => $request['category_id'],
            'description' => $request['description'],
        ]);
        for($i=1; $i<5; $i++) {
            $input = 'image_' . $i;
            if($request->hasFile($input)) {
                $file[$i] = $request->file($input);
                $name[$i] = $file[$i]->getClientOriginalName();
                $file[$i]->move("images/products_images/" . $request->input('name'), $name[$i]);
                $product->$input = $name[$i];
            }
        }
        //dd($product);
        $product->save();
        return redirect('/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *@param Request $request
//     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $product = Product::find(request()->input('product'));
        return view('edit', compact('product'), ['categories' => \App\Models\Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        //
        //validator(array($request))->validate();
        $product= Product::firstWhere('id', request()->input('id'));
        $product->name= request('name');
        $product->price = request('price');
        $product->material = request('material');
        $product->category_id = request('category_id');
        $product->description = request('description');
        for($i=1; $i<5; $i++) {
            $input = 'image_' . $i;
            if($request->hasFile($input)) {
                //File::deleteDirectory("images/products_images/" . request('old_name'));
                $file[$i] = $request->file($input);
                $name[$i] = $file[$i]->getClientOriginalName();
                $file[$i]->move("images/products_images/" . $request->input('name'), $name[$i]);
                $product->$input = $name[$i];
            }
        }
        //dd($product);
        $product->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Product::destroy(request()->input());
        return redirect('/dashboard');
    }
}
