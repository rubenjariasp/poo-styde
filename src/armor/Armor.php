<?php

namespace Curso\Armor;

interface Armor
{
	public function absorbDamage($damage);
	public function description(Unit $unit);
}