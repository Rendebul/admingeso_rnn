<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [ "code" => "1", "name" => "Tarapacá"],
            [ "code" => "2", "name" => "Antofagasta"],
            [ "code" => "3", "name" => "Atacama"],
            [ "code" => "4", "name" => "Coquimbo"],
            [ "code" => "5", "name" => "Valparaíso"],
            [ "code" => "6", "name" => "O'Higgins"],
            [ "code" => "7", "name" => "Maule"],
            [ "code" => "8", "name" => "Biobío"],
            [ "code" => "9", "name" => "La Araucanía"],
            [ "code" => "10", "name" => "Los Lagos"],
            [ "code" => "11", "name" => "Aysén"],
            [ "code" => "12", "name" => "Magallanes"],
            [ "code" => "13", "name" => "Metropolitana de Santiago"],
            [ "code" => "14", "name" => "Los Ríos"],
            [ "code" => "15", "name" => "Arica y Parinacota"]
        ];

        foreach ($data as $key => $value) {
            Region::create($value);
        }
    }
}
