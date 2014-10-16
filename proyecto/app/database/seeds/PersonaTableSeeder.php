<?php

class PersonaTableSeeder extends Seeder {

	public function run()
	{
		DB::table('personas')->delete();
		Persona::create(array('nombre' => 'mi persona'));
	}
}