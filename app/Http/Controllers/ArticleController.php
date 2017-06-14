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
    public function index()
    {
        $datas = Article::orderBy('id_article')->paginate(5);
        return view('admin_panel.main')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.add_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'author' => 'required'
        ]);

        $append = new Article();
        $append->title = $request['title'];
        $append->content = $request['content'];
        $append->author = $request['author'];
        $append->image = str_random(10);
        $append->save();

        return redirect()->to('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Article::find($id);
        return view('admin_panel.show_article')->with('show', $show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show_edit = Article::where('id_article', $id)->first();
        return view('admin_panel.edit_article')->with('show_edit', $show_edit);
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

        $update = Article::where('id_article', $id)->first();
        $update->title = $request['title'];
        $update->content = $request['content'];
        $update->author = $request['author'];
        $update->image = str_random(10);
        $update->update();

        return redirect()->to('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Article::find($id);
        $delete->delete();

        return redirect()->to('/admin');
    }
}
