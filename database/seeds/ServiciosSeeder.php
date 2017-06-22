<?php

use Illuminate\Database\Seeder;
use App\Region;
use App\ServicioSalud;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ "code" => 1, "name" => "Arica", "region_id" => 15 ],
            [ "code" => 2, "name" => "Iquique", "region_id" => 1 ],
            [ "code" => 3, "name" => "Antofagasta", "region_id" => 2 ],
            [ "code" => 4, "name" => "Atacama", "region_id" => 3 ],
            [ "code" => 5, "name" => "Coquimbo", "region_id" => 4 ],
            [ "code" => 6, "name" => "Valparaíso San Antonio", "region_id" => 5 ],
            [ "code" => 7, "name" => "Viña del Mar Quillota", "region_id" => 5 ],
            [ "code" => 8, "name" => "Aconcagua", "region_id" => 5 ],
            [ "code" => 9, "name" => "Metropolitano Norte", "region_id" => 13 ],
            [ "code" => 21, "name" => "Araucanía Sur", "region_id" => 9 ],
            [ "code" => 15, "name" => "Del Libertador B.O'Higgins", "region_id" => 6 ],
            [ "code" => 10, "name" => "Metropolitano Occidente", "region_id" => 13 ],
            [ "code" => 11, "name" => "Metropolitano Central", "region_id" => 13 ],
            [ "code" => 12, "name" => "Metropolitano Oriente", "region_id" => 13 ],
            [ "code" => 13, "name" => "Metropolitano Sur", "region_id" => 13 ],
            [ "code" => 14, "name" => "Metropolitano Sur Oriente", "region_id" => 13 ],
            [ "code" => 16, "name" => "Del Maule", "region_id" => 7 ],
            [ "code" => 17, "name" => "Ñuble", "region_id" => 8 ],
            [ "code" => 22, "name" => "Valdivia", "region_id" => 14 ],
            [ "code" => 24, "name" => "Del Reloncaví", "region_id" => 10 ],
            [ "code" => 26, "name" => "Magallanes", "region_id" => 12 ],
            [ "code" => 18, "name" => "Concepción", "region_id" => 8 ],
            [ "code" => 19, "name" => "Talcahuano", "region_id" => 8 ],
            [ "code" => 20, "name" => "Biobío", "region_id" => 8 ],
            [ "code" => 23, "name" => "Osorno", "region_id" => 10 ],
            [ "code" => 25, "name" => "Aisén", "region_id" => 11 ],
            [ "code" => 28, "name" => "Arauco", "region_id" => 8 ],
            [ "code" => 29, "name" => "Araucanía Norte", "region_id" => 9 ],
            [ "code" => 33, "name" => "Chiloé", "region_id" => 10 ]
        ];


        $regiones = Region::pluck('id', 'code');

        foreach ($data as $key => $servicioSalud) {
            $servicioSalud['region_id'] = $regiones[$servicioSalud['region_id']];

            ServicioSalud::create($servicioSalud);
        }
    }
}
