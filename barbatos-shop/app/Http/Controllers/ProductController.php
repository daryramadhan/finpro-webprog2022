<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')->get();
        // dd('products');
        return view('home', ['products'=>$product]);
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

    public function productDetail(Request $request){
        $Detail = Product::where('id', $request->id)->get();
        return view('detail-product', ['Detail'=>$Detail]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validator = Validator::make($request->all(),[
            'insert-name'=>'required',
            'insert-category'=>'required',
            'insert-detail'=>'required',
            'insert-price'=>'required',
            'insert-image'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $imageFile = $request->file('insert-image');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        // Menit 1:19:00 penjelasan Storage
        Storage::putFileAs('public/image',$imageFile,$imageName);

        DB::table('items')->insert([
            'item_name' => $request->get('insert-name'),
            'item_category' => $request->get('insert-category'),
            'item_detail' => $request->get('insert-detail'),
            'item_price' => $request->get('insert-price'),
            'item_image' => $imageName,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id)
    {
        $product = DB::table('items')->where('id','like',$id)->get();
        return view('update',['item'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validator = Validator::make($request->all(),[
            'update-name'=>'required',
            'update-category'=>'required',
            'update-detail'=>'required',
            'update-price'=>'required',
            'update-image'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $imageFile = $request->file('update-image');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        Storage::putFileAs('public/image',$imageFile,$imageName);

        DB::table('items')->update([
            'item_name' => $request->get('update-name'),
            'item_category' => $request->get('update-category'),
            'item_detail' => $request->get('update-detail'),
            'item_price' => $request->get('update-price'),
            'item_image' => $imageName,
        ]);

        return redirect('/');
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
    }
}
