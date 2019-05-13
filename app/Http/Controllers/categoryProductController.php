<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use Illuminate\Http\Request;

class categoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Cats =  CategoryProduct::all ();

        return view ('admin.CategoryProduct.ListCatProduct', compact ('Cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.CategoryProduct.AddCatProduct');
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

        CategoryProduct::create($data);
        return  redirect ()->to('admin/CategoryProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryProduct $categoryProduct
     * @param $id
     * @return void
     */
    public function show(CategoryProduct $categoryProduct,$id)
    {


        $data['ProductCats'] = CategoryProduct::find($id)->first();
        $data['ProductInfo'] =  $data['ProductCats']->Products()->paginate(9);

        return view ('Product.showProductList',compact ('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryProduct $categoryProduct,$id)
    {
        $Cat = CategoryProduct::find($id);
        return view ('admin.CategoryProduct.EditCatProduct',compact ('Cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProduct $categoryProduct,$id)
    {
        $CategoryProduct = CategoryProduct::find($id);

        if($CategoryProduct)
        {
            $data = request ()->except (['_token', '_method']);

            CategoryProduct::where ('id', $id)->update ($data);

            return  redirect ()->to('admin/CategoryProduct');
        }else{
            return back ();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $categoryProduct,$id)
    {
        $DelSlide = CategoryProduct::where('id',$id)->first();

        if($DelSlide)
        {
            $ResultDeleteCategory = CategoryProduct::destroy ($id);
            if($ResultDeleteCategory)
            {
                return response()->json([
                    'Success' => 'دسته بندی مورد نظر با موفقیت حذف شد'
                ]);
            }else{
                return response()->json([
                    'Error' => 'خطا در حذف دسته بندی'
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
