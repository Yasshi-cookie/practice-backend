<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function 正常系_test(): void
    {
        $author = Author::factory()->create();

        $post = Post::factory()
            ->recycle($author)
            ->create();

        $comment = Comment::factory()
            ->recycle($author)
            ->recycle($post)
            ->create();
        $tag = Tag::factory()
            ->create();
        $postTag = PostTag::factory()
            ->recycle($post)
            ->recycle($tag)
            ->create();

        $this->assertDatabaseCount(Author::class, 1);
        $this->assertDatabaseCount(Post::class, 1);
        $this->assertDatabaseCount(Comment::class, 1);
        $this->assertDatabaseCount(Tag::class, 1);
        $this->assertDatabaseCount(PostTag::class, 1);
    }
}
