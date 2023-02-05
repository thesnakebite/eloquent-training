<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * @test
     * @testdox Un post pertenece a un autor
     */
    function a_post_belongs_to_an_author()
    {

        $user = User::factory()->create();
        $post = Post::factory()->create([
            'author_id' => $user->id,
        ]);

        $this->assertInstanceOf(BelongsTo::class, $post->author());
        $this->assertInstanceOf(User::class, $post->author);
        $this->assertTrue($post->author->is($user));
    }
}