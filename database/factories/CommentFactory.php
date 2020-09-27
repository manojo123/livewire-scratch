<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => auth()->check() ? auth()->id() : User::factory()->create()->id,
            'post_id' => Post::factory()->create()->id,
            'comment' => $this->faker->text(),
            'thumbs_up' => $this->faker->numberBetween(0, 1000),
            'thumbs_down' => $this->faker->numberBetween(0, 1000)
        ];
    }
}
