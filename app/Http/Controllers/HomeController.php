<?php

namespace App\Http\Controllers;
use App\Models\Comment;




use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::all();
        
        if(auth()->user()->name == 'admin') {
            return view('home', compact('comments'));

        }
        
    }

    public function approveComment($id)
    {
        $affectedRows = Comment::where('id', '=', $id)->update(array('approved' => 1));
        return redirect()->route('home');
    }

    
}
