<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->is_public = $request->is_public;
        $article->save();

        return response()->json($article, 201);
    }

    public function show($id)
    {
        return Article::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function destroy($id)
    {
        Article::destroy($id);

        return response()->json(null, 204);
    }
}
