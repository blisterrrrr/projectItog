<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'desc' => fake()->text(128),
            'important' => fake()->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
