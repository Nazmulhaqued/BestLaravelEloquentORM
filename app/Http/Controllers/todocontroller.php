<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use Session;
class todocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $todos =todo::all();
        return view('todo.home',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'body'=>'required|unique:todos',
        'title'=>'required',
    ]);
       $todo = new todo;
       $todo->body = $request->body;
       $todo->title = $request->title;
       $productImage = $request->file('image');
       $imageName = $productImage->getClientOriginalName();
       $uploadPath = 'public/NzImage/';
       $productImage->move($uploadPath,$imageName);
       $imageUrl = $uploadPath.$imageName;
       $todo->image = $imageUrl;

       $todo->save();
       return redirect('todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  $item = todo::find($id);
       return view('todo.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = todo::find($id);
        return view('todo.edit',compact('item'));
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
       $validatedData = $request->validate([
        'body'=>'required',
        'title'=>'required',
    ]);
       $todo = todo::find($id);
       $todo->body = $request->body;
       $todo->title = $request->title;
       $todo->save();
       Session::flash('message', 'Task successfully added!');
       return redirect('todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $item = todo::find($id);
       $item->delete();
       return redirect('todo');
    }
}
