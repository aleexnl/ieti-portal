<?php

namespace Database\Factories;

use App\Models\Career;
use App\Models\Term;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class CareerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Career::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $terms = Term::all(['id'])->toArray();
        $term = Arr::random($terms);
        return [
            'term_id' => $term['id'],
            'name' => $this->faker->name,
            'code' => $this->faker->word,
            'description' => $this->faker->paragraph,
        ];
    }
}
