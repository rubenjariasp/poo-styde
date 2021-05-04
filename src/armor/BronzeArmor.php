<?php

namespace Curso\Armor;

class BronzeArmor implements Armor{
	
	public function absorbDamage($damage)
	{
		return $damage/2;
	}

	public function description(Unit $unit)
	{
		show("{$unit->getName()} adquirió una armadura de bronce");
	}
}