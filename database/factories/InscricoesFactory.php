<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscricoes>
 */
class InscricoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        $statusOption = ["Cancelado", "Confirmado", "Pendente"];
        $eventosOption = [
            "Semana da tecnologia e Ciência", 
            "SEMICT", 
            "Hackathon de Desenvolvimento",
            "Feira de Empreendedorismo",
            "Passeata contra aulas no sábado"
        ];
        return [
            'nome' => fake()->name(),
            'evento' => $faker->randomElement($eventosOption),
            'data_evento' => now(),
            'status' => $faker->randomElement($statusOption),
        ];
    }
}
