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

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Purchased Harry Potter',
          'trans_amount' => 21.99,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'For iPad',
          'trans_amount' => 299.99,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => "Mother's day gift",
          'trans_amount' => 100.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => "Lunch with colleagues",
          'trans_amount' => 10.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

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

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Cashed a paycheck ',
          'trans_amount' => 250.00,
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

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Trip to canada',
          'trans_amount' => 450.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Eyeglasses',
          'trans_amount' => 250.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Movies',
          'trans_amount' => 25.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

      DB::table('transactions')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'trans_desc' => 'Bus Pass',
          'trans_amount' => 170.00,
          'trans_date' => Carbon\Carbon::now()->toDateString(),
          'user_id' => $user_id,
          'type_id' => $type_id,
      ]);

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
