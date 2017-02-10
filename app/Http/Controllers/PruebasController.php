<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Prueba;
use Storage;
use Illuminate\Routing\Route;


class PruebasController extends Controller
{

    /**
     * PruebasController constructor.
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $pruebas = Prueba::all();
        return view('pruebas.index')->with(['pruebas'=>$pruebas]);
        //return \View::make('pruebas.index'); //Tambien sirve
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pruebas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prueba = new Prueba();
        $img = $request->file('imagen');
        $file_route = time().''.$img->getClientOriginalName();
        Storage::disk('imgnoticas')->put($file_route,file_get_contents($img->getRealPath()));
        $prueba->namecat=$request->nombre;
        $prueba->created_at=$request->datepicker;
        $prueba->status=$request->status;
        $prueba->redaccion=$request->blog;
        $prueba->url=$file_route;
        $prueba->email=$request->email;
        $prueba->save();
        return redirect()->action('PruebasController@index');
    }

    public function getImagen($filename){
        $file=Storage::disk('imgnoticas')->get($filename);
        return new Response($file,200);
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
        $prueba = Prueba::find($id);
        return view('pruebas.index')->with(['edit'=>true,'prueba'=>$prueba]);
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
        $prueba = Prueba::find($id);
        $img = $request->file('imagen');
        $file_route = time().''.$img->getClientOriginalName();
        Storage::disk('imgnoticas')->put($file_route,file_get_contents($img->getRealPath()));
        Storage::disk('imgnoticas')->delete($request->img);
        $prueba->namecat=$request->nombre;
        $prueba->updated_at=$request->datepicker;
        $prueba->status=$request->status;
        $prueba->redaccion=$request->blog;
        $prueba->url=$file_route;
        $prueba->email=$request->email;
        $prueba->save();
        return redirect()->action('PruebasController@index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Prueba::destroy($id);
            return back();
    }
}
