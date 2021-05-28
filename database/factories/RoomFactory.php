<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition() {
        $state = $this->faker->state;
        return [
            'name' => $state,
            'slug' => Str::of($state)->slug('-'),
            'category'=>$state,
            'active' => rand(0,50)
        ];
    }
}
