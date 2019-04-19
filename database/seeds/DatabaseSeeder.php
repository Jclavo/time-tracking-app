<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // TABLE USER_TYPES
        DB::table('user_types')->insert(
            ['id'          => 1,
             'description' => 'Developer',
             'created_at'  => now(),
             'updated_at'  => now(),
            ]
       );
       DB::table('user_types')->insert(
           ['id'          => 2,
             'description' => 'Project manager',
             'created_at' => now(),
             'updated_at' => now(),
            ]
      );
      DB::table('user_types')->insert(
            [   'id'          => 3,
                'description' => 'Marketing',
                'created_at'  => now(),
                'updated_at'  => now(),
            ]
      );
      
      // TABLE TASK_STATUS
      DB::table('task_status')->insert(
          [ 'id'          => 1,
            'description' => 'Open',
            'created_at'  => now(),
            'updated_at'  => now(),
          ]
      );
      DB::table('task_status')->insert(
          [   'id'          => 2,
              'description' => 'Closed',
              'created_at'  => now(),
              'updated_at'  => now(),
          ]
          );
      DB::table('task_status')->insert(
          [   'id'          => 3,
              'description' => 'Implementation',
              'created_at' => now(),
              'updated_at' => now(),
          ]
          );
      DB::table('task_status')->insert(
          [   'id'          => 4,
              'description' => 'Testing',
              'created_at' => now(),
              'updated_at' => now(),
          ]
          );
      
      // TABLE USER
      
      /*DB::table('users')->insert(
          [ 'name'           => 'Jose C.',
              'email'        => 'jclavotafur@gmail.com',
              'password'     => bcrypt('clavo123'),
              'user_type_id' => 1,
              'created_at'   => now(),
              'updated_at'   => now(),
          ]
          );
      */
      
      
    }
}
