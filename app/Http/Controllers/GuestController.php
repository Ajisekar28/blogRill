<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blog;

class GuestController extends Controller
{
    public function index()
    {
        $datas = DB::table('blogs')->paginate(4);
        return view('blog', ['datas' => $datas ]);
    }

    public function category($category)
    {
        $posts = blog::where('category', $category)->get();
        return view('category', ['posts' => $posts, 'category' => $category]);
    }

    public function more(string $id)
    {
        $data = blog::find($id); // Replace with your actual model
        return view('blogmore', compact('data'));
    }

    public function more2()
    {
        return view('more');
    }
}
