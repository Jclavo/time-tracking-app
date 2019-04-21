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
              'admin'        => 1,
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
              'user_type_id' => 3,
              'created_at'   => now(),
              'updated_at'   => now(),
          ]
          );
      
      // TABLE PROJECTS
      
      DB::table('projects')->insert(
          [   'id'           => 1,
              'name'         => 'Working Capital',
              'description'  => 'This project will help to manage money',
          ]
          );
      DB::table('projects')->insert(
          [   'id'           => 2,
              'name'         => 'PAGFAC',
              'description'  => 'It is about Payments and',
          ]
          );
      DB::table('projects')->insert(
          [   'id'           => 3,
              'name'         => 'IFRS16',
              'description'  => 'This project is about reporting expenses',
          ]
          );
      
      // TABLE TASK
      
      DB::table('tasks')->insert(
          [   'name'            => 'Estimation',
              'start_date'      => '08/04/2019',
              'end_date'        => '08/04/2019',
              'hour'            => '3',
              'task_status_id'  => '2',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Create MT100',
              'start_date'      => '08/04/2019',
              'end_date'        => '10/04/2019',
              'hour'            => '20',
              'task_status_id'  => '2',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Upload MT100',
              'start_date'      => '11/04/2019',
              'end_date'        => '12/04/2019',
              'hour'            => '5',
              'task_status_id'  => '2',
              'user_id'         => '2',
              'project_id'      => '1',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Unit test',
              'start_date'      => '15/04/2019',
              'end_date'        => '17/04/2019',
              'hour'            => '20',
              'task_status_id'  => '4',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Docs',
              'start_date'      => '17/04/2019',
              'end_date'        => '17/04/2019',
              'hour'            => '5',
              'task_status_id'  => '2',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      //TASKS -> PAGFAC
      DB::table('tasks')->insert(
          [   'name'            => 'Estimation',
              'start_date'      => '17/04/2019',
              'end_date'        => '17/04/2019',
              'hour'            => '2',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Create report',
              'start_date'      => '17/04/2019',
              'end_date'        => '19/04/2019',
              'hour'            => '22',
              'task_status_id'  => '3',
              'user_id'         => '2',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Export as PDF',
              'start_date'      => '19/04/2019',
              'end_date'        => '19/04/2019',
              'hour'            => '8',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Unit test 1',
              'start_date'      => '22/04/2019',
              'end_date'        => '22/04/2019',
              'hour'            => '8',
              'task_status_id'  => '1',
              'user_id'         => '2',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Unit test 1',
              'start_date'      => '22/04/2019',
              'end_date'        => '22/04/2019',
              'hour'            => '8',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Docs',
              'start_date'      => '23/04/2019',
              'end_date'        => '23/04/2019',
              'hour'            => '4',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2,
          ]
          );
            
      
      
      
      
      
      
      
      
      
      
      
      
      
    }
}
