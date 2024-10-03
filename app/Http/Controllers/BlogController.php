<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogIndex()
    {
        $blogs = Blog::all();
        return view ('blog.bloglist', compact('blogs'));
    }

    // public function blog()
    // {
    //     $blogs = Blog::all();
    //     return view ('blog', compact('blogs'));
    // }

    // Menampilkan form untuk membuat blog baru
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
    // Validasi input
    $request->validate([
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        'blog_title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'create_date' => 'required|date',
        'content' => 'required',
    ]);

    // Menangani upload file gambar
    if ($request->hasFile('thumbnail')) {
        // Mengambil file yang diupload
        $image = $request->file('thumbnail');
        // Menentukan nama file
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        // Menyimpan file di direktori 'public/images/blog'
        $image->move(public_path('images/blog'), $imageName);
    }

    // Menyimpan data blog ke database
    Blog::create([
        'thumbnail' => $imageName, // Menyimpan nama file di database
        'blog_title' => $request->blog_title,
        'author' => $request->author,
        'create_date' => $request->create_date,
        'content' => $request->content,
    ]);

    return redirect()->route('blogs.list')->with('success', 'Blog created successfully.');
    }

    // Method untuk menghapus blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id); // Mencari blog berdasarkan ID

        // Menghapus file gambar dari server
        if ($blog->thumbnail) {
            $imagePath = public_path('images/blog/' . $blog->thumbnail);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Menghapus file
            }
        }

        $blog->delete(); // Menghapus entri dari database
        return redirect()->route('blogs.list')->with('success', 'Blog deleted successfully.');
    }
    

}
