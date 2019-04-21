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
              'email'        => 'jclavo@gmail.com',
              'password'     => bcrypt('admin'),
              'user_type_id' => 1,
              'admin'        => 1,
              'created_at'   => now(),
              'updated_at'   => now(),
          ]
          );
      DB::table('users')->insert(
          [   'name'         => 'Cristian C.',
              'email'        => 'cjesus@gmail.com',
              'password'     => bcrypt('cjesus@gmail.com'),
              'user_type_id' => 1,
              'created_at'   => now(),
              'updated_at'   => now(),
          ]
          );
      DB::table('users')->insert(
          [   'name'         => 'Karla G.',
              'email'        => 'karlita@hotmail.com',
              'password'     => bcrypt('karlita@hotmail.com'),
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
              'start_date'      => '2019-04-08',
              'end_date'        => '2019-04-08',
              'hour'            => '3',
              'task_status_id'  => '2',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      
      DB::table('tasks')->insert(
          [   'name'            => 'Create MT100',
              'start_date'      => '2019-04-08',
              'end_date'        => '2019-04-10',
              'hour'            => '20',
              'task_status_id'  => '2',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Upload MT100',
              'start_date'      => '2019-04-11',
              'end_date'        => '2019-04-12',
              'hour'            => '5',
              'task_status_id'  => '2',
              'user_id'         => '2',
              'project_id'      => '1',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Unit test',
              'start_date'      => '2019-04-15',
              'end_date'        => '2019-04-17',
              'hour'            => '20',
              'task_status_id'  => '4',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Docs',
              'start_date'      => '2019-04-17',
              'end_date'        => '2019-04-17',
              'hour'            => '5',
              'task_status_id'  => '2',
              'user_id'         => '1',
              'project_id'      => '1',
          ]
          );
      //TASKS -> PAGFAC
      DB::table('tasks')->insert(
          [   'name'            => 'Estimation',
              'start_date'      => '2019-04-17',
              'end_date'        => '2019-04-17',
              'hour'            => '2',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Create report',
              'start_date'      => '2019-04-17',
              'end_date'        => '2019-04-19',
              'hour'            => '22',
              'task_status_id'  => '3',
              'user_id'         => '2',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Export as PDF',
              'start_date'      => '2019-04-19',
              'end_date'        => '2019-04-19',
              'hour'            => '8',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Unit test 1',
              'start_date'      => '2019-04-22',
              'end_date'        => '2019-04-22',
              'hour'            => '8',
              'task_status_id'  => '1',
              'user_id'         => '2',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Unit test 1',
              'start_date'      => '2019-04-22',
              'end_date'        => '2019-04-22',
              'hour'            => '8',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2',
          ]
          );
      DB::table('tasks')->insert(
          [   'name'            => 'Docs',
              'start_date'      => '2019-04-23',
              'end_date'        => '2019-04-23',
              'hour'            => '4',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '2',
          ]
          );
      //TASKS -> PAGFAC
      DB::table('tasks')->insert(
          [   'name'            => 'To confirm',
              'start_date'      => '2019-05-15',
              'end_date'        => '2019-05-15',
              'hour'            => '6',
              'task_status_id'  => '1',
              'user_id'         => '1',
              'project_id'      => '3',
          ]
          );
            
      
      
      
      
      
      
      
      
      
      
      
      
      
    }
}
