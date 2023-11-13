<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blog;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = DB::table('blogs')->paginate(4);
        return view('admin.masterblog', ['datas' => $datas ]);
    }

    public function blog()
    {
        $datas = DB::table('blogs')->paginate(4);
        return view('admin.blog', ['datas' => $datas ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = blog::all();
        return view('admin.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter', 
            'mimes' => 'file :attribute harus bertype jpg, jpeg, png',
            'in' => ':attribute harus salah satu dari kategori yang valid',
        ];

        // Validasi request form
        $this->validate($request, [
            'title' => 'required|min:5|max:30',
            'text' => 'required|min:30',
            'image' => 'required|mimes:jpg,jpeg,png',
            'category' => 'required|in:education,technology,lifestyle,job', // Tambahkan validasi kategori di sini
        ], $message);

        // Ambil informasi gambar
        $file = $request->file('image');
        // Ambil nama gambar dan rename
        $nama_file = time() . '-' . $file->getClientOriginalName();

        // Proses upload
        $file->move('storage/', $nama_file);

        Blog::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $nama_file,
            'category' => $request->category, // Simpan kategori ke dalam database
        ]);

        return redirect()->route('admin.index')->with('message', 'Post berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datas= blog::find($id);
        return view('admin.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        // dd($request);
        $this->validate($request, [
            'title' => 'required|min:5|max:30',
            'text' => 'required|min:30',   
            'image' => 'mimes:jpg,jpeg,png',
            'category' => 'required|in:education,technology,lifestyle,job', // Tambahkan validasi kategori di sini
        ]);

        $datas = blog::find($id);

        if (!$datas) {
            return redirect()->route('admin.index')->with('error', 'project tidak ditemukan.');
        }

        $datas->title = $request->title;
        $datas->text = $request->text;
        $datas->category = $request->category;

        if ($request->hasFile('image')) {
            if(isset($datas->image)){
                $file_path =  'storage/' . $datas->image;
                unlink($file_path);
            }
            // dd($request);
            $file = $request->file('image');
            $nama_file = time() . '-' . $request->file('image')->getClientOriginalName();

            $file->move('storage/', $nama_file);

            $datas->image = $nama_file;
        }
        $datas->save();

        return redirect()->route('admin.index')->with('message', 'project berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datas = blog::find($id);
        if (!$datas) {
            return redirect()->route('admin.index')->with('error', 'Post tidak ditemukan');
        }
        $imagepath = 'storage/' . $datas->image;
        // dd($imagepath);
        if (file_exists($imagepath)) {
            unlink($imagepath);
        }
        $datasName = $datas->title;
        $datas->delete();

        return redirect()->route('admin.index')->with('message',$datasName .' berhasil dihapus');
    }
}
