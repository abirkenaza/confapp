<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Conferance;
use App\Models\Revision;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();
            if($this->user->active == 0) 
            {
                Redirect::to('/accountconfirmation')->send();
            }
            return $next($request);
        });
    }
    
    public function index()
    {
        $articles = Article::where('author_id', Auth::user()->id)->get();
        foreach($articles as $article)
        {
            $splitted = explode('.',$article->filename);
            $extension = $splitted[count($splitted)-1];
            $article->conferance = Conferance::where('id',$article->conferance_id)->first();
            $article->revision = Revision::where('article_id', $article->id)->first();
            $article->file_extension = $extension;
        }
        return view('chercheur.mesArticles', ['articles' => $articles]);
    }

    public function create(Request $request)
    {
        $conf = Conferance::find($request->conferanceId);
        return view('chercheur.createArticle', ['conf' => $conf]);
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->author_id = Auth::user()->id;
        $article->conferance_id = $request->confId;
        $article->save();

        
        // save files in storage > app > articles
        $name = explode('.',$request->file->getClientOriginalName());
        $extension = $name[count($name)-1];
        $nomFichier = "Article-".$article->id.".".$extension;
        $article->filename = $nomFichier;
        $article->save();

        $request->file->storeAs('articles',$nomFichier);

        return redirect('myarticles');
    }

    public function delete(Request $request)
    {
        $article = Article::where('id', $request->id)->first();
        $article->delete();
        return redirect('myarticles');
    }

    public function get(Request $request)
    {
            $article = Article::find($request->id);
            if($article == null) abort(404);

            if((Auth::user()->is_admin == 1) || (Auth::user()->id == $article->author_id))
            {
                return $article;
            }
            else{
                abort(403, 'Unauthorized action.');
            }
    }
}
