<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PostList = Post::all();
        return view ('admin.Posts.ListPosts', compact ('PostList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.Posts.AddPost', compact ('CatProduct'));
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

        $imageName = time().'.'.request()->img->getClientOriginalExtension();

        $Path = public_path('img/post');
        $PathLarge = public_path('img/post/Large');


        $PathLargeName = sprintf ('%s/%s',$PathLarge,$imageName);


        Image::make(request()->img->getRealPath())->resize(600,400)->save($PathLargeName);
        $file->move($Path, $imageName);

        $data['img'] = $imageName;

        Post::create($data);

        return  redirect ()->to('admin/Post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @param $id
     * @return void
     */
    public function show(Post $post,$id)
    {
        $newsDetail = Post::find($id);
        return view ('Post.newsDetail',compact ('newsDetail'));
    }


    public function articleView(Post $post ,$id)
    {

        $articleDetail =Post::find($id);;
        return view ('Post.articleDetail',compact ('articleDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post ,$id)
    {

        $Post = Post::find($id);
        return view ('admin.Posts.EditPost',compact ('Post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post ,$id)
    {
        $Post = Post::find($id);

        if($Post)
        {
            $data = request ()->except (['_token', '_method']);
            request()->validate([

                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

            ]);
            $file = Input::file('img') ;

            $imageName = time().'.'.request()->img->getClientOriginalExtension();

            $Path = public_path('img/Post');
            $PathLarge = public_path('img/Post/Large');


            $PathLargeName = sprintf ('%s/%s',$PathLarge,$imageName);


            Image::make(request()->img->getRealPath())->resize(600,400)->save($PathLargeName);
            $file->move($Path, $imageName);

            if(File::exists($Path.'/'.$Post['img'])){
                File::delete($Path.'/'.$Post['img']);
            }

            if(File::exists($PathLarge.'/'.$Post['img'])){
                File::delete($PathLarge.'/'.$Post['img']);
            }

            $data['img'] = $imageName;
            Post::where ('id', $id)->update ($data);

            return  redirect()->to('admin/Post');
        }else{
            return back ();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }


    public function newsList ()
    {
        $ListPost = Post::where('type','news')->paginate(9);

        return view ('Post.listPost', compact ('ListPost'));
    }

    public function articleList ()
    {
        $articleList = Post::where('type','article')->paginate(9);

        return view ('Post.articleList', compact ('articleList'));
    }



}
