<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;
use App\Product;
use App\User;
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
        User::create([
        	'name'=>'Paulo Bitencourt',
        	'email'=>'paulo86roberto@gmail.com',
        	'password'=>bcrypt('123456'),
        	'email_verified_at'=>NOW(),
        	'address'=>'Brazil',
        	'phone_number'=>'5592992204996',
        	'is_admin'=>1
        ]);
    }
}
