<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $by_status = $request->status;
        $by_highlight = $request->highlight;
        $by_type = $request->type;
        $per_page = $request->per_page;
        $sort = $request->sort;
        $collumn = $request->collumn;
        $articles = Article::when($by_status, function($query) use($by_status){
            $query->where('status',$by_status);
        }) //Lọc theo status
        ->when($by_highlight, function($query) use($by_highlight){
            $query->where('highlight',$by_highlight);
        }) //Lọc theo highlight = nổi bật
        ->when($by_type, function($query) use($by_type){
            $query->where('type',$by_type);
        }) // Lọc theo kiểu bài viết
        ->when($collumn, function($query) use($collumn, $sort){
            ($sort) ? ($query->orderBy($collumn, $sort)) : ($query->orderBy($collumn, 'ASC'));
        }) // Lọc theo cột, sắp xếp theo tăng dần hoặc giảm dần
        ->orderBy('created_at', 'DESC')
        ->paginate($per_page);
        return $this->sendResponse($articles, "Receive Articles successfully.");
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
