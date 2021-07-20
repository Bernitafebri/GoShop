<?php

namespace App\Http\Controllers;
use App\discount;
use App\product;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts=discount::with('product')->get();
        return view ('discount.index', compact('discounts'));
    }

    public function create()
    {
        $products=product::all();
        return view ('discount.add', compact('products'));
        // return view ('discount.add');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|integer',
            'value' => 'required|integer',
        ]);
        $discount = discount::create([
            'product_id' => $request->product_id,
            'value' => $request->value,
        ]);
        
            return redirect('/discount')->with(['status' => 'Data Berhasil Disimpan!']);


    }

    
    public function edit(discount $discount)
    {
        $products=product::get();
        return view('discount.edit', compact('discount'))->with('products',$products);
    }

    
    public function update(Request $request, discount $discount)
    {
        $this->validate($request, [
            'product_id' => 'required|integer',
            'value' => 'required|integer',
        ]);

        discount::where('id', $discount->id)->update([
            'product_id' => $request->product_id,
            'value' => $request->value,
        ]);
        return redirect('/discount')->with('status', 'Data berhasil diubah!');
    }


    public function delete($id)
    {
        // DB::table('discounts')->where('id',$id)->delete();
        $data = discount::findOrFail($id);
        $data->delete();
        return redirect('/discount')->with('status', 'Data berhasil dihapus!');
    }
}
