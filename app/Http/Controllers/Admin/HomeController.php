<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;


class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $sliders = Home::all();

    return view('admin.home.home', compact('sliders'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Home  $home
   * @return \Illuminate\Http\Response
   */
  public function edit(Home $home)
  {
    return view('admin.home.edit', compact('home'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Home  $home
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Home $home)
  {

    $request->validate([
      'title' => 'required',
      'description' => 'required',
      'nameImage' => 'required',
      'url' => 'required',
      'orden' => 'required',
    ]);

    $home->update($request->all());

    return redirect()->route('adminHome')->with('success', 'Noticia actualizada exitosamente!');
  }
}
