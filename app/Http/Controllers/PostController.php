<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // عرض جميع المقالات
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // عرض صفحة إنشاء مقال جديد
    public function create()
    {
        return view('posts.create');
    }

    // حفظ المقال الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|unique:posts,title',
            'content' => 'required|min:10',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');    }

    // عرض مقال واحد بالتفصيل
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // عرض صفحة تعديل مقال موجود
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // تحديث بيانات المقال
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3|unique:posts,title,' . $post->id,
            'content' => 'required|min:10',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');    }

    // حذف مقال
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post Deleted successfully!');
    }
}
