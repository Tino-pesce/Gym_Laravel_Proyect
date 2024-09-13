<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; 

class AdminBlogController extends Controller
{
    public function editarAdminBlog()
    {
        $blogs = Blog::all();
        return view('abm', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creador' => 'required',
        ]);

        Blog::create($request->all());

        return redirect('/blogs')->with('success', 'Blog creado correctamente.');
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', ['blog' => $blog]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creador' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return redirect('/blogs')->with('success', 'Blog actualizado correctamente.');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/blogs')->with('success', 'Blog eliminado correctamente.');
    }
}


