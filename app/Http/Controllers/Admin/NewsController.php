<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $noticias = News::all();

    return view('admin.news.news', compact('noticias'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.news.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $request->validate([
      'title' => 'required',
      'subtitle' => 'required',
      'texto' => 'required',
    ]);

    $storeNews = News::create([
      'title' => $request->title,
      'subtitle' => $request->subtitle,
      'texto' => $request->texto,
    ]);

    return redirect()->route('adminNews')->with('success', 'Noticia capturada exitosamente!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\News  $news
   * @return \Illuminate\Http\Response
   */
  public function show(News $news)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\News  $news
   * @return \Illuminate\Http\Response
   */
  public function edit(News $news)
  {
    return view('admin.news.edit', compact('news'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\News  $news
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, News $news)
  {

    $request->validate([
      'title' => 'required',
      'subtitle' => 'required',
      'texto' => 'required',
    ]);

    $news->update($request->all());

    return redirect()->route('adminNews')->with('success', 'Noticia actualizada exitosamente!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\News  $news
   * @return \Illuminate\Http\Response
   */
  public function destroy(News $news)
  {
    $news->delete();

    return redirect()->route('adminNews')->with('success', 'Noticia borrada exitosamente!');
  }
}
