<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use function collect;
use function fake;
use function htmlspecialchars;
use function random_int;
use function str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['react', 'php', 'laravel', 'vue', 'tailwind', 'javascript', 'nextjs', 'python'], random_int(1,5)),
            'created_by' => User::factory(),
        ];
    }
}