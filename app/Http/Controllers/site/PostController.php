<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Ticket;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the Posts.
     */
    public function listPosts(): View
    {
        $listPosts = Post::where('is_active', true)
                        ->orderBy('created_at', 'desc')
                        ->paginate(30);
        return view('site.pages.list_posts', compact('listPosts'));
    }

    /**
     * Display the specified Post.
     */
    public function showPost(Post $post): View
    {
        $userTickets = Ticket::where('post_id', $post->id)
                            ->where('is_active', true)
                            ->orderBy('created_at', 'desc')
                            ->paginate(30);
        return view('site.pages.show_post', compact('post', 'userTickets'));
    }
}
