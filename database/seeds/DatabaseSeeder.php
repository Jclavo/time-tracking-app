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
            ['description' => 'Developer',
             'created_at' => now(),
             'updated_at' => now(),
            ]
       );
       DB::table('user_types')->insert(
            ['description' => 'Project manager',
                'created_at' => now(),
                'updated_at' => now(),
            ]
      );
      DB::table('user_types')->insert(
            ['description' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now(),
            ]
      );
      
      // TABLE TASK_STATUS
      DB::table('task_status')->insert(
          ['description' => 'Open',
            'created_at' => now(),
            'updated_at' => now(),
          ]
      );
      DB::table('task_status')->insert(
          ['description' => 'Closed',
              'created_at' => now(),
              'updated_at' => now(),
          ]
          );
      DB::table('task_status')->insert(
          ['description' => 'Implementation',
              'created_at' => now(),
              'updated_at' => now(),
          ]
          );
      DB::table('task_status')->insert(
          ['description' => 'Testing',
              'created_at' => now(),
              'updated_at' => now(),
          ]
          );
      
      
      
    }
}
