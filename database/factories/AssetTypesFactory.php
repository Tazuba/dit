<?php

namespace Database\Factories;

use App\Models\AssetTypes;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetTypesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AssetTypes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence(15),
        ];
    }
}
