<?php

namespace Database\Factories;

use App\Models\Post;
use Faker\Provider\Youtube;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => auth()->check() ? auth()->id() : User::factory()->create()->id,
            'title' => $this->faker->sentence(),
            'video_url' => 'https://www.youtube.com/embed/' . Str::random(10),
            'image_url' => 'https://dummyimage.com/800x600/777/fff',
            'thumbs_up' => $this->faker->numberBetween(0, 1000),
            'thumbs_down' => $this->faker->numberBetween(0, 1000)
        ];
    }
}
