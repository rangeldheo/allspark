<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all();
        $max = sizeof($users);
        $indice = rand(1,$max -1);
        return [
            'text'=>$this->faker->text(),
            'user_id'=> $users[$indice]
        ];
    }
}
