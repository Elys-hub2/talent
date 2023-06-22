<?php

namespace Database\Factories;

use App\Models\Demandeinscription;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demandeinscription>
 */
class DemandeinscriptionFactory extends Factory
{


    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demandeinscription::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->userName(),
            'prénom' => $this->faker->lastName(),
            'poste' => $this->faker->unique()->regexify('[A-Za-z0-9]{8}'),
            'diplôme' => $this->faker->unique()->regexify('[A-Za-z0-9]{20}'),
            'sujet' => 'formation',
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'contenu' => $this->faker->unique()->regexify('[A-Za-z0-9{500}]'),
            
        ];
    }
}
