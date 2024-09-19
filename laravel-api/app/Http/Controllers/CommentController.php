<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;


class CommentController extends Controller
{
    public function index() { 
        return [
            'comments' => DB::table('comments')->paginate(15)
        ];
    }

    public function store(Request $request) { 
         // La validation de données
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required|max:250',
        ]);

        // On crée un nouvel utilisateur
        $comment = Comment::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json($comment, 201);
    }

    public function show(string $id) { 
        return response()->json(Comment::find($id));
    }

    public function update(Request $request, Comment $comment) { }

    public function destroy(Comment $comment) { }
}
