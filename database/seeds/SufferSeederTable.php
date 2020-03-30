<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\Incident;
use Carbon\Carbon;

class SufferSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suffers')->delete();
        DB::table('suffers')->insert([
            'car_id' => Car::where('enrollment', '2543 SXX')->first()->id,
            'incident_id' => Incident::where('price', '500')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00')
        ]);
        DB::table('suffers')->insert([
            'car_id' => Car::where('enrollment', '1543 KMS')->first()->id,
            'incident_id' => Incident::where('price', '7500')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00')
        ]);
        DB::table('suffers')->insert([
            'car_id' => Car::where('enrollment', '3000 BBC')->first()->id,
            'incident_id' => Incident::where('price', '750')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00')
        ]);
        DB::table('suffers')->insert([
            'car_id' => Car::where('enrollment', '3000 KLK')->first()->id,
            'incident_id' => Incident::where('price', '15000')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00')
        ]);
        DB::table('suffers')->insert([
            'car_id' => Car::where('enrollment', '6699 GYM')->first()->id,
            'incident_id' => Incident::where('price', '5000')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00')
        ]);
    }
}
