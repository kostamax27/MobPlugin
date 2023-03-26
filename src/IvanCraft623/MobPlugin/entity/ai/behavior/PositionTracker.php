<?php

/*
 *   __  __       _     _____  _             _
 *  |  \/  |     | |   |  __ \| |           (_)
 *  | \  / | ___ | |__ | |__) | |_   _  __ _ _ _ __
 *  | |\/| |/ _ \| '_ \|  ___/| | | | |/ _` | | '_ \
 *  | |  | | (_) | |_) | |    | | |_| | (_| | | | | |
 *  |_|  |_|\___/|_.__/|_|    |_|\__,_|\__, |_|_| |_|
 *                                      __/ |
 *                                     |___/
 *
 * A PocketMine-MP plugin that implements mobs AI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 *
 * @author IvanCraft623
 */

declare(strict_types=1);

namespace IvanCraft623\MobPlugin\entity\ai\behavior;

use IvanCraft623\MobPlugin\entity\Living;
use pocketmine\math\Vector3;

class PositionTracker implements PosTracker {

	protected Vector3 $position;

	public function __construct(Vector3 $position) {
		$this->position = $position;
	}

	public function currentPosition() : Vector3{
		return $position->add(0.5, 0.5, 0.5);
	}

	public function currentBlockPosition() : Vector3{
		return clone $this->position;
	}

	public function isVisibleBy(Living $entity) : bool{
		return true;
	}
}
