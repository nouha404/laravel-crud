<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("eleve")->insert(
            [
                [
                    "nom"=> "Diop",
                    "prenom"=> "Lamine",
                    "tuteur"=> "Aly Niang",
                    "sexe"=> "masculin",
                    "age"=>18,
                    "adresse"=>"Wakhal Diam"
                ],
                [
                    "nom" => "Sow",
                    "prenom" => "Fatou",
                    "tuteur" => "Mamadou Sow",
                    "sexe" => "féminin",
                    "age" => 17,
                    "adresse" => "Parcelles Assainies",
                ],
                [
                    "nom" => "Cisse",
                    "prenom" => "Mamadou",
                    "tuteur" => "Aissatou Cisse",
                    "sexe" => "masculin",
                    "age" => 19,
                    "adresse" => "Liberté 6 Extension",
                ],
                [
                    "nom" => "Faye",
                    "prenom" => "Aissatou",
                    "tuteur" => "Abdou Faye",
                    "sexe" => "féminin",
                    "age" => 20,
                    "adresse" => "HLM Grand Médine",
                ],
                [
                    "nom" => "Faye",
                    "prenom" => "Aissatou",
                    "tuteur" => "Abdou Faye",
                    "sexe" => "féminin",
                    "age" => 20,
                    "adresse" => "HLM Grand Médine",
                ]

            ]
        );
    }
}
