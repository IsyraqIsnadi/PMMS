<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'email_verified_at' => $this->faker->dateTime(),
            'password' => \Hash::make('password'), // password
            'matric_id' =>$this->faker->text(),
            'gender'=>$this->faker->text(),
            'phone_number' =>$this->faker->mobileNumber(),
            'staff_id'=>$this->faker->bothify('PTK-####'),
            'dateEnter'=>$this->faker->date(),
            'year'=>$this->faker->year(),
            'program'=>$this->faker->text(),
            'is_active'=>$this->faker->boolean,
            
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
