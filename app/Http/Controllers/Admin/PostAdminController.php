<?php

namespace App\Http\Controllers\Admin;

use App\Enum\StatusPost;
use App\Events\FinishDatePost;
use App\Http\Controllers\Controller;
use App\Http\Requests\post\StorePostRequest;
use App\Http\Requests\post\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.posts.pages.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $status_posts = StatusPost::cases();
        return view('admin.posts.pages.create', compact('status_posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->safe()->only(['title', 'content', 'status_post', 'code']);

        $postCreated = Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'status_post' => $validated['status_post'],
            'code' => $validated['code']
        ]);

        return redirect()->route('posts.show', $postCreated->id)
            ->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        return view('admin.posts.pages.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        $status_posts = StatusPost::cases();
        return view('admin.posts.pages.edit', compact('post', 'status_posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        $validated = $request->safe()->only(['title', 'content', 'status_post', 'finish_date']);

        $post->update($validated);

        if ($post->finish_date != null) {
            event(new FinishDatePost($post));
        }


        return redirect()->route('posts.show', $post->id)
            ->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->update(['is_active' => false]);
        return redirect()->route('posts.show', $post->id)
            ->with('success', 'Post deactivate successfully');
    }

    /**
     * Activate Post
     */
    public function active(Post $post): RedirectResponse
    {
        $post->update(['is_active' => true]);
        return redirect()->route('posts.show', $post->id)
            ->with('success', 'Post activated successfully');
    }
}
