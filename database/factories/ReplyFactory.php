<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reply;
use Carbon\Carbon;


class ReplyFactory extends Factory
{
    protected $model = Reply::class;

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
            'text' => $this->faker->realText(20),
            'post_id' => $this->faker->numberBetween(1,1000),
            'created_at' => $now,
            'updated_at' => $now
        ];
    }
}
