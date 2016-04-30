<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user_id = \App\User::where('name','=','Jill')->pluck('id')->first();
      $type_id = \App\Type::where('trans_type','=','WITHDRAW')->pluck('id')->first();
      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Purchased The Great Gatsby',
          'trans_amount' => 12.99,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      $user_id = \App\User::where('name','=','Jill')->pluck('id')->first();
      $type_id = \App\Type::where('trans_type','=','DEPOSIT')->pluck('id')->first();
      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Pocket Money from parents',
          'trans_amount' => 100.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      $user_id = \App\User::where('name','=','Jamal')->pluck('id')->first();
      $type_id = \App\Type::where('trans_type','=','WITHDRAW')->pluck('id')->first();
      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Purchased a bicycle',
          'trans_amount' => 79.99,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      $user_id = \App\User::where('name','=','Jamal')->pluck('id')->first();
      $type_id = \App\Type::where('trans_type','=','DEPOSIT')->pluck('id')->first();
      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Cash from grandma',
          'trans_amount' => 60.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);


    }
}
