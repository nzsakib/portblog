<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_see_form_for_creating_blog_post()
    {
        $this->withoutExceptionHandling();

        $this->get(route('blog.create'))->assertStatus(200);
    }

    /** @test */
    public function admin_can_create_a_blog_post()
    {
        $this->withoutExceptionHandling();

        $data = raw(Post::class);

        $this->post(route('blog.store'), $data)->assertStatus(302);

        $this->assertDatabaseHas('posts', [
            'title' => $data['title'],
        ]);
    }
}
