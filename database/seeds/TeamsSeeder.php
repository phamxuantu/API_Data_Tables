<?php

use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
        DB::table('teams')->insert([
            'id' => 1,
            'name' => 'Arsenal',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);
        DB::table('teams')->insert([
            'id' => 2,
            'name' => 'AFC Bournemouth',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);
        DB::table('teams')->insert([
            'id' => 3,
            'name' => 'Burnley','ST' => 0,
            'position' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);
        DB::table('teams')->insert([
            'id' => 4,
            'name' => 'Chelsea',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);
        DB::table('teams')->insert([
            'id' => 5,
            'name' => 'Crystal Palace',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 6,
            'name' => 'Everton',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 7,
            'name' => 'Hull City',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 8,
            'name' => 'Leicester City',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);


        DB::table('teams')->insert([
            'id' => 9,
            'name' => 'Liverpool',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 10,
            'name' => 'Manchester City',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 12,
            'name' => 'Middlesbrough',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);


        DB::table('teams')->insert([
            'id' => 11,
            'name' => 'Manchester United',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);


        DB::table('teams')->insert([
            'id' => 13,
            'name' => 'Southampton',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 14,
            'name' => 'Stoke City',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 15,
            'name' => 'Sunderland',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 16,
            'name' => 'Swansea City',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 17,
            'name' => 'Tottenham Hotspur',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 18,
            'name' => 'Watford',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 19,
            'name' => 'West Bromwich Albion',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);

        DB::table('teams')->insert([
            'id' => 20,
            'name' => 'West Ham United',
            'position' => 0,
            'ST' => 0,
            'T' => 0,
            'H' => 0,
            'B' => 0,
            'TG' => 0,
            'TH' => 0,
            'HS' => '',
            'DIEM' => 0,
        ]);
    }
}
