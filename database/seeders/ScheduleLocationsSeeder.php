<?php

namespace Database\Seeders;

use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScheduleLocationsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $stories = [];
        $faker = Factory::create();

        for($i = 1; $i <= 110; $i++){
            $stories[] = [
                'schedule_location_id' => NULL,
                'schedule_id' => $faker->randomElement($array = array('1', '2', '3', '4', '11', '12', '17', '18', '25', '27', '31', '35', '36', '41', '42', '299', '47', '48', '51', '52', '57', '58', '59', '60', '61', '62', '63', '64', '69', '70', '77', '78', '79', '80', '81', '82', '83', '84', '89', '90', '91', '92', '93', '94', '101', '102', '107', '108', '119', '120', '325', '123', '124', '133', '134', '135', '136', '141', '142', '143', '144', '145', '146', '147', '148', '149', '150', '157', '163', '158', '159', '160', '161', '162', '164', '169', '170', '172', '173', '174', '175', '183', '184', '189', '190', '201', '202', '205', '206', '215', '216', '217', '218', '223', '224', '225', '226', '227', '228', '229', '230', '231', '232', '239', '240', '241', '242', '243', '244')),
                'cinema_auditorium_id' => $faker->numberBetween(1, 54),
                'type' => $faker->randomElement($array = array('2D', '3D'))
            ];
        }
        DB::table('schedule_locations')->insert($stories);
    }
}