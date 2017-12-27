<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = article::published()->get();

        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $article = article::create([
      'titre'=> $request->titre,
      'slug'=> str_slug($request->titre),
      'online'=>$request->online ?'1':'0',
      'content'=> $request->content

      ]);
       return redirect(route('article.show',$article));
      // var_dump($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = article::where('slug', $slug)->firstOrFail();

        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $article  = article::where('slug', $slug)->firstOrFail();
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $slug)
    {
      $article  = article::where('slug', $slug)->firstOrFail();
        $article->update([
      'titre'=> $request->titre,
      'slug'=> str_slug($request->titre),
      'online'=> $request->online ?'1':'0',
      'content'=> $request->content


        ]);


        return redirect(route('article.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $article = article::where('slug',$slug)->firstOrFail();
        $article->delete();
        return redirect(route('article.index'));
    }
}
