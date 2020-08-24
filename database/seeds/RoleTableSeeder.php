<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
            'name'=>'admin',
            'guard_name'=>'web']);

        DB::table('roles')->insert([
            'name'=>'quiz maker',
            'guard_name'=>'web']);

        DB::table('roles')->insert([
            'name'=>'participant',
            'guard_name'=>'web']);

        // DB::table('roles')->insert([
        // 	'name'=>'']);
    }
}
 