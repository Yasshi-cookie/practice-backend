<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\PostTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\PostTag>
 */
final class PostTagFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = PostTag::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'post_id' => \App\Models\Post::factory(),
            'tag_id' => \App\Models\Tag::factory(),
        ];
    }
}
