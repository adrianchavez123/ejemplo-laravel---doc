<?php


class PersonaController extends BaseController
{
	public function ingresar()
	{
		return View::make('persona.ingresar');
	}

	public function ingresarPost()
	{
		$persona = new Persona();
		$persona->nombre = Input::get('nombre');
		$persona->save();
		return "La persona ".$persona->nombre." ha sido ingresada!";
	}

	public function mostrar()
	{
		$personas = Persona::all();
		return View::make('persona.mostrar')->with(['personas' => $personas]);
	}

	public function actualizar($id)
	{
		return View::make('persona.actualizar')->with('id',$id);
	}
	public function actualizarPost()
	{
		$persona = Persona::find(Input::get('id'));
		$persona->nombre = Input::get('nombre');
		$persona->save();
		
	}
	public function borrar($id)
	{
		$persona = Persona::find($id);
		$persona->delete();
		return 'Registro eleminado!';
	} 
}