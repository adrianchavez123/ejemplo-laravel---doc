<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PersonaTableSeeder');
		$this->command->info('La persona ha sido ingresada!');
	}

}
