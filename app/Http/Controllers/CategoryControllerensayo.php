<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Categories.index', [
            'category' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  return view('Categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  /*   public function store(Request $request)
    {
        $request->validate([

            'nameCategory' => ['required', 'string', 'max:30'],
            'value' => ['required', 'integer'],
            'idProduct' => ['required'],
        ]);
       */

     /*    Category::create([
            'nameCategory' => $request->get('name'),
            'value' => $request->get('value'),
            'idProduct' => $request->get('idProduct'),
        ]);
        return redirect('/category');
    } */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
   /*  public function show(category $category)
    {
        return view ('categories.show', [
            'category' => $category,
        ]);
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
  /*   public function edit(category $category)
    {
        return view('Categories.edit', [
            'category' => $category,
        ]);
    }
 */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
 /*    public function update(Request $request, category $category)
    {
        $request->validate([

            'name' => ['required', 'string', 'max:30'],
            'value' => ['required', 'integer'],
            'idProduct' => ['required'],
        ]);
       

        $category->name = $request->get('name');
        $category->value = $request->get('value');
        $category->idProduct = $request->get('idProduct');
        $category->save();
        return redirect('/category');

    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
   /*  public function destroy(category $category){
        Category::destroy($category->id);

    } */
}
