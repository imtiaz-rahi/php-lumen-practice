<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /** The name of the factory's corresponding model. */
    protected $model = Author::class;

    /** Define the model's default state. */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'github' => $this->faker->unique()->name,
            'twitter'=> $this->faker->unique()->name,
            'location' => $this->faker->address,
            'mobile' => $this->faker->phoneNumber,
            'latest_article_published' => $this->faker->realText
        ];
    }
}
