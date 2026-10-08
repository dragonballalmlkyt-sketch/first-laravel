<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

/**
 * @extends Factory<Model>
 */
class PostFactory extends Factory
{

    protected $model = Post::class; // Specify the model associated with this factory
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id' => Str::uuid()->toString(),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'author'=> $this->faker->name,
        ];
    }
}
