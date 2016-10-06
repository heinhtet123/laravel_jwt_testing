<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
         $users = array(
                ['name' => 'heinhtet', 'email' => 'heinhtet@gmail.com', 'password' => Hash::make('secretstarfall')],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
