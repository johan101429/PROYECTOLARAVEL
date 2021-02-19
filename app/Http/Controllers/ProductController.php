<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Products.index', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => ['required', 'string', 'max:30'],
            'value' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'status' => ['required'],
        ]);
        $image = '';
        if ($request->file('productcover') != null) {
            $image = $this->get_and_save_image($request->file('productcover'));

        }

        Product::create([
            'name' => $request->get('name'),
            'value' => $request->get('value'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'image' => $image,
        ]);
        return redirect('/product');
    }
    public function get_and_save_image($productcover)
    {

        $extension = $productcover->getClientOriginalExtension();

        Storage::disk('public')->put($productcover->getFilename() . '.' . $extension, File::get($productcover));
        return $productcover->getFilename() . '.' . $extension;

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view ('Products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('Products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $request->validate([

            'name' => ['required', 'string', 'max:30'],
            'value' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'status' => ['required'],
        ]);
        if ($request->file('productcover') != null) {
            $product->image = $this-> get_and_save_image($request->file('productcover'));

        }

        $product->name = $request->get('name');
        $product->value = $request->get('value');
        $product->description = $request->get('description');
        $product->status = $request->get('status');
        $product->save();
        return redirect('/product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product){
        Product::destroy($product->id);

    }
}
