<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        return view('products.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::get();
        return view('products.tambah')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' =>'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
            'price' => 'required|integer',
        ]);
        //image upload
        $image = $request->file('image');
        $imageName = date('YmdHis').'.'.$image->getClientOriginalExtension();
        $destination = storage_path('app/public/products');
        $image->move($destination, $imageName);

        if($request->status == 'on'){
            $status='ready';
        }else{
            $status='sold';
        }
        if($request->show == 'on'){
            $show='ya';
        }else{
            $show='tidak';
        }

        $product = product::create([
            'name'              => $request->name,
            'image'             => $imageName,
            'categories_id'     => $request->category,
            'description'       => $request->description,
            'price'             => $request->price,
            'status'            => $status,
            'show'              => $show,
        ]);
        if($product){
            //redirect dengan pesan sukses
            return redirect()->route('product.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('product.index')->with(['error' => 'Data Gagal Disimpan!']);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $categories = category::get();
        return view('products.edit', compact('product'))->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
         $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'image' =>'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
            'price' => 'required|integer',
        ]);

        $product = product::findorFail($product->id);

        if($request->status == 'on'){
            $status='ready';
        }else{
            $status='sold';
        }
        if($request->show == 'on'){
            $show='ya';
        }else{
            $show='tidak';
        }

        if ($request->file('image')== "") {
            $product->update([
            'name'              => $request->name,
            'categories_id'     => $request->category,
            'description'       => $request->description,
            'price'             => $request->price,
            'status'            => $status,
            'show'              => $show,
        ]);
        }else {
           Storage::disk('local')->delete('public/products/'.$product->image);
           //image upload
           $image = $request->file('image');
           $imageName = date('YmdHis').'.'.$image->getClientOriginalExtension();
           $destination = storage_path('app/public/products');
           $image->move($destination, $imageName);
            $product->update([
            'name'              => $request->name,
            'image'             => $imageName,
            'categories_id'     => $request->category,
            'description'       => $request->description,
            'price'             => $request->price,
            'status'            => $status,
            'show'              => $show,
            ]);
        }

        if($product){
            //redirect dengan pesan sukses
            return redirect()->route('product.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('product.index')->with(['error' => 'Data Gagal Disimpan!']);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        Storage::disk('local')->delete('public/products'.$product->image);
        $product->delete();
        return redirect()->route('product.index');
    }
}