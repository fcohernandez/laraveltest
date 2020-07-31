<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role;             //creating role using role model
        $admin->name = "admin";
        $admin->display_name = "Admin";
        $admin->save();

         //create editor role
         $editor = new Role;            //creating role using role model
         $editor->name = "editor";
         $editor->display_name = "editor";
         $editor->save();
    }
}
