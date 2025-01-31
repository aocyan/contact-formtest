<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ContactFactory extends Factory
{
   protected $model = Contact::class;

    public function definition()
    {
        $categoryIds = DB::table('categories')->pluck('id');

        return [
                'category_id' => $categoryIds->random(),
                'first_name' => $this->faker->firstName,
                'last_name' => $this->faker->lastName,
                'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
                'email' => $this->faker->safeEmail(),
                'tel' => $this->faker->numberBetween(11,11),
                'address' => $this->faker->address,
                'content' => $this->faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ];
    }
}
