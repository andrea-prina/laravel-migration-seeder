<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $trains = [
            [
                'company' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_date' => '2022-09-09',
                'departure_time' => '17:25:00',
                'arrival_date' => '2022-09-09',
                'arrival_time' => '20:25:00',
                'train_code' => 'IT00002',
                'carriage_num' => 10,
                'on_time' => 1,
                'delay_minutes' => 0,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Pavia',
                'arrival_station' => 'Milano',
                'departure_date' => '2022-12-09',
                'departure_time' => '15:00:00',
                'arrival_date' => '2022-12-09',
                'arrival_time' => '15:20:00',
                'train_code' => 'TN01234',
                'carriage_num' => 5,
                'on_time' => 1,
                'delay_minutes' => 0,
                'cancelled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Firenze',
                'arrival_station' => 'Venezia',
                'departure_date' => '2022-09-09',
                'departure_time' => '10:00:00',
                'arrival_date' => '2022-09-09',
                'arrival_time' => '12:30:00',
                'train_code' => 'FR12322',
                'carriage_num' => 8,
                'on_time' => 1,
                'delay_minutes' => 0,
                'cancelled' => 0
            ],
        ];

        foreach ($trains as $train) {
            
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_date = $train['arrival_date'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriage_num = $train['carriage_num'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->delay_minutes = $train['delay_minutes'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        }
    }
}
