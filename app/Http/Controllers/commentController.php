<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $dataComment = request ()->except (['_token', '_method']);

        $data['type'] = $dataComment['type'];
        $data['comment'] = $dataComment['comment'];
        $data['id_related'] = $dataComment['id_related'];
        $data['user_id'] = $id;
        $data['parent_id'] = '0';
        $data['status'] = '0';
        $Comment = Comment::create($data);

            if($Comment)
            {
                return 'success:نظر شما با موفقیت ثبت شد،بعد از تایید مدیریت نظر شما نمایش داده خواهد شد';
            }else{
                return 'error:خطا در ثبت نظر،لطفا مجددا تلاش فرمائید';
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
