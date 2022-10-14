<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Carbon\Carbon;

class PostFactory extends Factory
{

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now(); 

        return [
            'maker' => $this->faker->name,
            'text' => $this->faker->realText(30),
            'created_at' => $now,
            'updated_at' => $now
        ];
    }
}
