<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
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
     * Carga la vista con el formulario para crear un nuevo post
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $data = ['rene','meme','lucho qlo feo'];
        return view('dashboard.post.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     * El post enviado desde el metodo create es almacenado con este metodo
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $data = ['rene','meme','lucho qlo feo'];
        //dd($request->title);
        return redirect()->route('post.create',['data'=>$data])->with('exito','post enviado correctamente.');
        
        
        //return back()->with('mensaje','correcto!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
