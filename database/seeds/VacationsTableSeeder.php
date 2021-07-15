<?php

use Illuminate\Database\Seeder;
use App\Vacation;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayVacations = config('vacation');

        foreach($arrayVacations as $item) {
            $vacation = new Vacation();

            $vacation->destination = $item["destination"];
            $vacation->ticket_price = $item["ticket_price"];
            $vacation->departure = $item["departure"];
            $vacation->return = $item["return"];

            $vacation->save();
        }
    }
}
