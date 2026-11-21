<?php

declare(strict_types=1);

namespace IvanCraft623\MobPlugin\libs\_e421b59f3e68a8d4\kostamax27\loottable\condition;

use InvalidArgumentException;
use IvanCraft623\MobPlugin\libs\_e421b59f3e68a8d4\kostamax27\loottable\LootContext;

final class RandomChanceLootCondition implements LootCondition{

	public function __construct(
		readonly public float $chance
	){
		$this->chance >= 0.0 && $this->chance <= 1.0 || throw new InvalidArgumentException("'chance' must be within [0, 1], got {$this->chance}");
	}

	public function test(LootContext $context) : bool{
		return $context->random->nextFloat() < $this->chance;
	}
}