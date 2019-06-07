<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\PicProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

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

        $file = Input::file('img') ;

        $imageName = time().request()->img->getClientOriginalExtension();

        $Path = public_path('img/product');
        $PathLarge = public_path('img/product/Large');
        $PathMedium = public_path('img/product/Medium');
        $PathRectangle = public_path('img/product/Rectangle');
        $PathThumbnail = public_path('img/product/Thumbnail');


        $PathLargeName = sprintf ('%s/%s',$PathLarge,$imageName);
        $PathMediumName = sprintf ('%s/%s',$PathMedium,$imageName);
        $PathRectangleName = sprintf ('%s/%s',$PathRectangle,$imageName);
        $PathThumbnailName = sprintf ('%s/%s',$PathThumbnail,$imageName);


       Image::make(request()->img->getRealPath())->resize(600,600)->save($PathLargeName);
       Image::make(request()->img->getRealPath())->resize(450,600)->save($PathMediumName);
       Image::make(request()->img->getRealPath())->resize(270,246)->save($PathThumbnailName);
       Image::make(request()->img->getRealPath())->resize(470,246)->save($PathRectangleName);
        $file->move($Path, $imageName);

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
    public function show(Product $product,$id)
    {
        $Product['Detail'] = Product::with('CategoryProduct')->where('id',$id)->first();
        $Product['pic'] = picProduct::with('Product')->where('product_id',$id)->get();
//
//        dd($Product);
        return view ('Product.productDetail',compact ('Product'));
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
            $file = Input::file('img') ;

            $imageName = time().'.'.request()->img->getClientOriginalExtension();

            $Path = public_path('img/product');
            $PathLarge = public_path('img/product/Large');
            $PathMedium = public_path('img/product/Medium');
            $PathRectangle = public_path('img/product/Rectangle');
            $PathThumbnail = public_path('img/product/Thumbnail');


            $PathLargeName = sprintf ('%s/%s',$PathLarge,$imageName);
            $PathMediumName = sprintf ('%s/%s',$PathMedium,$imageName);
            $PathRectangleName = sprintf ('%s/%s',$PathRectangle,$imageName);
            $PathThumbnailName = sprintf ('%s/%s',$PathThumbnail,$imageName);


            Image::make(request()->img->getRealPath())->resize(600,600)->save($PathLargeName);
            Image::make(request()->img->getRealPath())->resize(450,600)->save($PathMediumName);
            Image::make(request()->img->getRealPath())->resize(270,246)->save($PathThumbnailName);
            Image::make(request()->img->getRealPath())->resize(470,246)->save($PathRectangleName);
            $file->move($Path, $imageName);

            if(File::exists($Path.'/'.$Product['img'])){
                File::delete($Path.'/'.$Product['img']);
            }

            if(File::exists($PathLarge.'/'.$Product['img'])){
                File::delete($PathLarge.'/'.$Product['img']);
            }
            if(File::exists($PathMedium.'/'.$Product['img'])){
                File::delete($PathMedium.'/'.$Product['img']);
            }
            if(File::exists($PathRectangle.'/'.$Product['img'])){
                File::delete($PathRectangle.'/'.$Product['img']);
            }
            if(File::exists($PathThumbnail.'/'.$Product['img'])){
                File::delete($PathThumbnail.'/'.$Product['img']);
            }
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
