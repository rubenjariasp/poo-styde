<?php

namespace Curso;

abstract class Unit
{
	protected $name;
	protected $life = 40;

	public function __construct($name)
	{
		$this->name = ucwords( strtolower($name) );
	}

	public function move($direction)
	{
		show("{$this->name} se desplaza hacía el {$direction}");
	}

}
