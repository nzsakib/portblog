<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewPostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_view_all_posts()
    {
        $post = create(Post::class);

        $this->get(route('blog.index'))->assertStatus(200)->assertSee($post->title);
    }
}
