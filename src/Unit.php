<?php

namespace Curso;

abstract class Unit
{
	protected $name;
	protected $life = 40;
	protected $armor;

	public function __construct($name, Armor $armor = null)
	{
		$this->name = ucwords( strtolower($name) );
		$this->armor = $armor;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setArmor(Armor $armor)
	{
		$this->armor = $armor;

		$armor->description($this);
	}

	public function move($direction)
	{
		show("{$this->name} se desplaza hacía el {$direction}");
	}

}
