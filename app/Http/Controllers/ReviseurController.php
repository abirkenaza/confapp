<?php

namespace App\Http\Controllers;

use App\Models\Revision;
use App\Models\Article;
use App\Models\Conferance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class ReviseurController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revisions = Revision::where('f_reviseur_id', $this->user->id)->orWhere('s_reviseur_id', $this->user->id)->get();
        $rev_number = null;
        foreach($revisions as $revision)
        {
            $article = Article::where('id', $revision->article_id)->first();
            $splitted = explode('.',$article->filename);
            $extension = $splitted[count($splitted)-1];
            $article->conferance = Conferance::where('id',$article->conferance_id)->first();
            $article->file_extension = $extension;
            $revision->article = $article;
            if($this->user->id == $revision->f_reviseur_id && $revision->f_reviseur_note != null){
                $revision->rated = true;
                $revision->rate = $revision->f_reviseur_note;
            }
            else if($this->user->id == $revision->s_reviseur_id && $revision->s_reviseur_note != null){
                $revision->rated = true;
                $revision->rate = $revision->s_reviseur_note;    
            }
            else $revision->rated = false; 
        }
        return view('reviseur.mesRevisions', ['revisions' => $revisions]);
    }

    public function rate(Request $request)
    {
        $revision = Revision::where('id', $request->id)->first();
        if($revision->f_reviseur_id == $this->user->id)
        {
            $revision->f_reviseur_note = $request->note;
            if($revision->s_reviseur_note == null) $revision->note_global = $revision->f_reviseur_note;
            else $revision->note_global = ($revision->f_reviseur_note + $revision->s_reviseur_note)/2;
        }
        if($revision->s_reviseur_id == $this->user->id)
        {
            $revision->s_reviseur_note = $request->note;
            if($revision->f_reviseur_note == null) $revision->note_global = $revision->s_reviseur_note;
            else $revision->note_global = ($revision->f_reviseur_note + $revision->s_reviseur_note)/2;
        }
        $revision->save();

        return redirect('/revisions');
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
