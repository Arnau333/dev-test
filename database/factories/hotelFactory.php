<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\hotel;


class hotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
   
        $collectionregimen = collect(['Desayuno incluido', 'Todo incluido', 'pension completa']);
        $collectioncondicionescancelacion = collect(['gratuita', 'no habilitada', 'pago 10%']);
        $collectiontarifa = collect(['$', '€']);

        return [
            'name' => $this->faker->name(),
            'regimen' =>  $collectionregimen->random(),
            'condicionescancelacion' =>  $collectioncondicionescancelacion->random(),
            'tarifa' =>   rand(1, 10000). $collectiontarifa->random(),
        ];
    }
}
