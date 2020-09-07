<?php

use Illuminate\Database\Seeder;
use App\Videogame;
use Faker\Generator as Faker;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 6 ; $i++) {
        $newVideogame = new Videogame();
        $newVideogame->nome = $faker->word();
        $newVideogame->piattaforma = $faker->randomElement($array = array('playstation','xbox','nintendo'));
        $newVideogame->genere = $faker->randomElement($array = array('azione','avventura','fantasy','sportivo'));
        $newVideogame->data_uscita = $faker->dateTime($max = 'now', $timezone = null);
        $newVideogame->save();
      }
    }
}
