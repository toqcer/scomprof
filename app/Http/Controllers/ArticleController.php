<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use App\Models\Comment;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.index');
    }

    public function manage()
    {
        $articles = Article::all();
        $usingDataTable = true;

        return view('article.manage', compact('articles', 'usingDataTable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'cover' => '/storage/' . $request->file('cover')->store('articles', 'public'),
            'content' => $request->content
        ]);

        return redirect()->route('admin.article.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.single', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->title = $request->title;
        if ($request->hasFile('cover')) {
            $article->cover = '/storage/' . $request->file('cover')->store('articles', 'public');
        }
        $article->content = $request->content;
        $article->save();

        return redirect()->route('admin.article.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->comments()->delete();
        $article->delete();

        return redirect()->route('admin.article.manage');
    }

    public function comment(Request $request,Article $article)
    {
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
            'article_id' => $article->id,
        ]);

        return redirect()->back()->with('success', 'Berhasil Menambahkan komentar, komentar akan muncul jika disetujui admin');
    }
}
