<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('roles')->delete();
        $admin = new Role;             //creating role using role model
        $admin->name = "admin";
        $admin->display_name = "Admin";
        $admin->save();

        //create editor role
        $normal = new Role;            //creating role using role model
        $normal->name = "normal";
        $normal->display_name = "Usuario comun";
        $normal->save();*/

        $user1 = User::find(3);  
        $user1->detachRole('admin');
        $user1->attachRole('admin'); 

        //second user as editor
        $user2 = User::find(4); 
        $user2->detachRole('normal'); 
        $user2->attachRole('normal');
    }
}
