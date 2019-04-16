<?php

namespace App\Http\Controllers;

use App\SlideShow;
use Illuminate\Http\Request;

class slideshowController extends Controller
{

    public function __construct ()
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
        $SliderList = SlideShow::all();
        return view ('admin.slideshow.ListSlide',compact ('SliderList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('admin.slideshow.AddSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request ()->except (['_token', '_method', 'flag']);

        request()->validate([

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

        ]);
        $imageName = time().'.'.request()->img->getClientOriginalExtension();

        request()->img->move(public_path('img/Slider'), $imageName);

        $data['img'] = $imageName;


        SlideShow::create($data);
        return  redirect ()->to('admin/Slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function show(SlideShow $slideShow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SlideShow $slideShow
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideShow $slideShow,$id)
    {
        $Slider = SlideShow::find($id);
        return view ('admin.slideshow.EditSlider',compact ('Slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideShow $slideShow,$id)
    {
        $Slider = SlideShow::find($id);

        if($Slider)
        {
            $data = request ()->except (['_token', '_method', 'flag']);
            request()->validate([

                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

            ]);
            $imageName = time().'.'.request()->img->getClientOriginalExtension();

            request()->img->move(public_path('img/Slider'), $imageName);

            $data['img'] = $imageName;

            SlideShow::where ('id', $id)->update ($data);

            return  redirect ()->to('admin/Slider');
        }else{
            return back ();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SlideShow $slideShow
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideShow $slideShow,Request $request,$id)
    {

        $DelSlide = SlideShow::where('id',$id)->first();


            if($DelSlide)
            {
                $image_path = "/img/slider/{$DelSlide['img']}";  // Value is not URL but directory file path

                $ResultDeleteSlider = SlideShow::destroy ($id);
                if($ResultDeleteSlider)
                {
                    if(file_exists(public_path($image_path))) {

                        @unlink(public_path($image_path));
                    }

                    return response()->json([
                        'Success' => 'بنر مورد نظر با موفقیت حذف شد'
                    ]);
                }else{
                    return response()->json([
                        'Error' => 'خطا در حذف اسلایدر'
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
