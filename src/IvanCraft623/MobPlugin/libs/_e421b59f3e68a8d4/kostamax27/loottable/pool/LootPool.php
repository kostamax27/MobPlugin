<?php

declare(strict_types=1);

namespace IvanCraft623\MobPlugin\libs\_e421b59f3e68a8d4\kostamax27\loottable\pool;

use IvanCraft623\MobPlugin\libs\_e421b59f3e68a8d4\kostamax27\loottable\LootContext;
use pocketmine\item\Item;

interface LootPool{

	/**
	 * @return list<Item>
	 */
	public function generate(LootContext $context) : array;
}