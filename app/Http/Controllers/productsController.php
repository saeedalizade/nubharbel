<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Product::with ('CategoryProduct')->get();

        return view ('admin.Product.ListProduct', compact ('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CatProduct = CategoryProduct::all ();
        return view ('admin.Product.AddProduct', compact ('CatProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request ()->except (['_token', '_method']);
        request()->validate([

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

        ]);
        $imageName = time().'.'.request()->img->getClientOriginalExtension();

        request()->img->move(public_path('img/product'), $imageName);
        $data['img'] = $imageName;

        Product::create($data);
        return  redirect ()->to('admin/Product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
//        \DB::enableQueryLog();
//        اینجا کد واکشی اطلاعات قرار میگیره
//        $query = \DB::getQueryLog();

        $Product = Product::with('CategoryProduct')->where('id',$id)->first();
        $Product['Category'] = CategoryProduct::all ();

        return view ('admin.Product.EditProduct',compact ('Product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $Product = Product::find($id);

        if($Product)
        {
            $data = request ()->except (['_token', '_method']);
            request()->validate([

                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

            ]);
            $imageName = time().'.'.request()->img->getClientOriginalExtension();

            request()->img->move(public_path('img/product'), $imageName);

            $data['img'] = $imageName;
           Product::where ('id', $id)->update ($data);

            return  redirect()->to('admin/Product');
        }else{
            return back ();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $Product = Product::where('id',$id)->first();


        if(!empty($Product))
        {
            $image_path = "/img/product/{$Product['img']}";  // Value is not URL but directory file path

            $ResultDeleteSlider = Product::destroy ($id);
            if($ResultDeleteSlider)
            {
                if(file_exists(public_path($image_path))) {

                    @unlink(public_path($image_path));
                }

                return response()->json([
                    'Success' => 'محصول مورد نظر با موفقیت حذف شد'
                ]);
            }else{
                return response()->json([
                    'Error' => 'خطا در حذف محصول'
                ]);
            }

        }else
        {
            return response()->json([
                'Error' => 'درخواست نامعتبر است'
            ]);
        }


    }
}
