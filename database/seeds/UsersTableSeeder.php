<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::Table('users')->delete();

/*        $users = [
            array(
                'name'=> 'Orlando Cofre',
                'email' => 'orlando.cofre77@gmail.com',
                'password' => bcrypt("admin125x"),
                'remember_token' => bcrypt("admin125x"),
                'created_at'=>date("Y-m-d H:i:s")
            ),
        ];

        DB::Table('users')->insert($users);*/


        factory(App\User::class)->times(5)->create();

    }
}
