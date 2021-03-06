<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objs = Blog::all();
        $data['objs'] = $objs;
        return view('admin.list.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['method'] = "post";
        $data['url'] = url('admin/blog/');
        return view('admin.form.blog', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Blog();
        $obj->topic  = $request['topic'];
        $obj->content = $request['content'];
        $obj->user_id = 1;
        $obj->save();
        return redirect(url('admin/blog')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Blog::find($id);
        //load view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Blog::find($id);
        $data['url'] = url('admin/blog/'.$id);
        $data['method'] = "put";
        $data['obj'] = $obj;
        return view('admin.form.blog', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Blog::find($id);
        $obj->topic  = $request['topic'];
        $obj->content = $request['content'];
        $obj->user_id = 1;
        $obj->save();
        return redirect(url('admin/blog')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Blog::find($id);
        $obj->delete();
    }
}
