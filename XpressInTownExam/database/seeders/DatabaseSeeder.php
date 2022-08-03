<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facade\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       // \App\Models\User::factory()->create([
       //     'name' => 'Test User',
       //      'email' => 'test@example.com',
       //  ]);

      for ($i = 1; $i < 500; $i++) 
      {  
         if(i%2==0){$c='accept';}
         if(i%5==0){$c='no response';}
         if(i%2!=0){$c='reject';}
         DB::table('calldetails')->insert([
           'log'=>'01'.random_int(3000112,4521369).'12';
           'date'=>random_int(2001,2022).'-'.random_int(1,12).'-'.random_int(1,30);
           'status'=>$c;
           'duration'=>random_int(2,400);
         ]);
      }
    }
}
