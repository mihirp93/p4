<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('types')->insert([
         'id'         => '1',
         'trans_type' => 'DEPOSIT',
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         ]);
         
     DB::table('types')->insert([
        'id'         => '2',
        'trans_type' => 'WITHDRAW',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
