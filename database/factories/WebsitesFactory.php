<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WebsitesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'userId' => 1,
            'siteSlug' => $this->faker->slug(),
            'siteName' => $this->faker->domainName(),
            'siteUrl' => $this->faker->url(),
            'siteEmail' => $this->faker->email(),
            'sitePassword' => $this->faker->password(),
            'siteImage' => $this->faker->imageUrl(),
            'siteComment' => $this->faker->realText(100)
        ];
    }
}
