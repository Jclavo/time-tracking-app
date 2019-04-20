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
      
      // TABLE TASK_STATUSES
      DB::table('task_statuses')->insert(
          [ 'id'          => 1,
            'description' => 'Open',
            'created_at'  => now(),
            'updated_at'  => now(),
          ]
      );
      DB::table('task_statuses')->insert(
          [   'id'          => 2,
              'description' => 'Closed',
              'created_at'  => now(),
              'updated_at'  => now(),
          ]
          );
      DB::table('task_statuses')->insert(
          [   'id'          => 3,
              'description' => 'Implementation',
              'created_at' => now(),
              'updated_at' => now(),
          ]
          );
      DB::table('task_statuses')->insert(
          [   'id'          => 4,
              'description' => 'Testing',
              'created_at' => now(),
              'updated_at' => now(),
          ]
          );
      
      // TABLE USER
      
      DB::table('users')->insert(
          [   'name'         => 'Jose C.',
              'email'        => 'jclavotafur@gmail.com',
              'password'     => bcrypt('clavo123'),
              'user_type_id' => 1,
              'created_at'   => now(),
              'updated_at'   => now(),
          ]
          );
      DB::table('users')->insert(
          [   'name'         => 'Cristian C.',
              'email'        => 'cjesus@gmail.com',
              'password'     => bcrypt('clavo123'),
              'user_type_id' => 1,
              'created_at'   => now(),
              'updated_at'   => now(),
          ]
          );
      DB::table('users')->insert(
          [   'name'         => 'Karla G.',
              'email'        => 'Karlita@hotmail.com',
              'password'     => bcrypt('clavo123'),
              'user_type_id' => 1,
              'created_at'   => now(),
              'updated_at'   => now(),
          ]
          );
      
      // TABLE PROJECTS
      
      DB::table('projects')->insert(
          [   'name'         => 'Working Capital',
              'description'  => 'This project will help to manage money',
          ]
          );
      DB::table('projects')->insert(
          [   'name'         => 'PAGFAC',
              'description'  => 'It is about Payments and',
          ]
          );
      DB::table('projects')->insert(
          [   'name'         => 'IFRS16',
              'description'  => 'This project is about reporting expenses',
          ]
          );
      
      
      
    }
}
