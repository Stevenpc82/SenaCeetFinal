<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides=Guide::all();
        return view('guias.index', compact('guides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url_imagen = $request->file('guia')->store('public');
        $url_imagen = str_replace('public/', 'storage/', $url_imagen);

        $guide = Guide::create([

            'name' => $request->input('name'),
            'guia' => $url_imagen,
        ]);
        return redirect('guias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guide =Guide::find($id);
        return view('guias.show',compact('guide'));
    }

    public function showpdf($id)
    {
        $guide =Guide::find($id);
        return view('guias.pdf',compact('guide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guide =Guide::find($id);
        return view('guias.edit',compact('guide'));
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
        $guide =Guide::find($id)->update([
            'name' => $request->input('name'),
            'guia'=> $request->input('guia'),
        ]);
        return redirect('guias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guide = Guide::find($id)->delete();
        return redirect('guias');
    }
}
