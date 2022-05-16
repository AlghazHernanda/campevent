<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $eventTheme = ["offline", "free"];
        $status = "accepted";
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)), //mt_rand = masukin panjang sentece random, jadi minimal 2 kata maksimal 8 kata
            'eventType' => mt_rand(1, 2),
            'eventTheme' => $eventTheme,
            'speaker' => $this->faker->name(),
            'price' => $this->faker->randomNumber(4, true),
            'date' => $this->faker->dateTime(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            //'body' => '<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'desc' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 3),
            'status' => $status,
            'no_hp' => $this->faker->randomNumber(9, true)
        ];
    }
}
