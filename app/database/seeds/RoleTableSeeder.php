<?php
class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        Role::create(array('role' => 'Empleado', 'active' => '1'));
        Role::create(array('role' => 'Administrador', 'active' => '1'));
    }

}