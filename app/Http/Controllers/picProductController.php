<?php

namespace App\Http\Controllers;

use App\PicProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class picProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $ListPicUpload['data'] = PicProduct::where('product_id',$id)->get();
        $ListPicUpload['id'] = $id;
        return view ('admin.Product.ListPicUpload',compact ('ListPicUpload'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['id'] = $id ;
        return view ('admin.Product.PicProduct',compact ('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return void
     */
    public function store(Request $request,$id)
    {
        $data = request ()->except (['_token', '_method']);
        request()->validate([

            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

        ]);

        $file = Input::file('file') ;

        $imageName = time().request()->file->getClientOriginalName();
        $Path = public_path('img/picProduct');
        $PathThumbnail = public_path('img/picProduct/Thumbnail');
        $PathLarge = public_path('img/picProduct/Large');


        $PathThumbnailName = sprintf ('%s/%s',$PathThumbnail,$imageName);
        $PathLargeName = sprintf ('%s/%s',$PathLarge,$imageName);

        Image::make(request()->file->getRealPath())->resize(100,100)->save($PathThumbnailName);
        Image::make(request()->file->getRealPath())->resize(450,600)->save($PathLargeName);
        $file->move($Path, $imageName);

        unset($data['file']);

        $data['img'] = $imageName;
        $data['product_id'] = $id;

        $result = PicProduct::create($data);

        if($result)
        {
            return 'success';
        }else{
            return 'error';
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PicProduct  $picProduct
     * @return \Illuminate\Http\Response
     */
    public function show(PicProduct $picProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PicProduct  $picProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(PicProduct $picProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PicProduct  $picProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PicProduct $picProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PicProduct $picProduct
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PicProduct $picProduct ,$id)
    {
        $Pic = picProduct::where('id',$id)->first();


        if(!empty($Pic))
        {
            $image_path = "/img/picProduct/{$Pic['img']}";  // Value is not URL but directory file path
            $image_pathThumbnail = "/img/picProduct/Thumbnail/{$Pic['img']}";  // Value is not URL but directory file path
            $image_pathLarge = "/img/picProduct/Large/{$Pic['img']}";  // Value is not URL but directory file path

            $ResultDeleteSlider = picProduct::destroy ($id);
            if($ResultDeleteSlider)
            {
                if(file_exists(public_path($image_path))) {

                    @unlink(public_path($image_path));
                }
                if(file_exists(public_path($image_pathThumbnail))) {

                    @unlink(public_path($image_pathThumbnail));
                }
                if(file_exists(public_path($image_pathLarge))) {

                    @unlink(public_path($image_pathLarge));
                }

                return response()->json([
                    'Success' => 'تصویر مورد نظر با موفقیت حذف شد'
                ]);
            }else{
                return response()->json([
                    'Error' => 'خطا در حذف تصویر'
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
