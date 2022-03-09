<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Product::all();
        return view('products.index', compact('date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_fumetto = new Product();

        // 1°metodo

        // $new_fumetto->title = $data["title"];
        // $new_fumetto->description = $data["description"];
        // $new_fumetto->thumb = $data["thumb"];
        // $new_fumetto->price = $data["price"];
        // $new_fumetto->series = $data["series"];
        // $new_fumetto->sale_date = $data["sale_date"];
        // $new_fumetto->type = $data["type"];

        // $new_fumetto->save();
        // 2° metodo con fill aggiungendo nel model protected $fillable=['nome_chiavi']

        $new_fumetto->fill($data);
        $new_fumetto->save();

        // 3°metodo - questo motodo fa istanza, fill, save
        //            bisogna poi aggiunggere nel model il protected $fillable=['nome_chiavi']
        
        // $new_fumetto->Product::create($data);

    
    
        return redirect()->route('products.show', $new_fumetto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        return view('products.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::findOrFail($id);
        return  view('products.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $editProduct = Product::findOrFail($id);
        $editProduct->update($data);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyProduct = Product::findOrFail($id);
        $destroyProduct->delete($destroyProduct);
        return redirect()->route('products.index');
    }

}
