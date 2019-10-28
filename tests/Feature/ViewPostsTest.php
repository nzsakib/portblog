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
    public function user_can_view_all_blog_posts()
    {
        $this->withoutExceptionHandling();

        $post = create(Post::class);

        $this->get(route('blog.index'))->assertStatus(200)->assertSee($post->title);
    }

    /** @test */
    public function user_can_view_single_blog_post()
    {
        $this->withoutExceptionHandling();

        $post = create(Post::class);

        $this->get(route('blog.show', ['slug' => $post->slug]))->assertStatus(200)->assertSee($post->title)->assertSee($post->content);
    }
}
