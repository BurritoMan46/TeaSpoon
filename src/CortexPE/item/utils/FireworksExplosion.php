<?php

/**
 *
 * MMP""MM""YMM               .M"""bgd
 * P'   MM   `7              ,MI    "Y
 *      MM  .gP"Ya   ,6"Yb.  `MMb.   `7MMpdMAo.  ,pW"Wq.   ,pW"Wq.`7MMpMMMb.
 *      MM ,M'   Yb 8)   MM    `YMMNq. MM   `Wb 6W'   `Wb 6W'   `Wb MM    MM
 *      MM 8M""""""  ,pm9MM  .     `MM MM    M8 8M     M8 8M     M8 MM    MM
 *      MM YM.    , 8M   MM  Mb     dM MM   ,AP YA.   ,A9 YA.   ,A9 MM    MM
 *    .JMML.`Mbmmd' `Moo9^Yo.P"Ybmmd"  MMbmmd'   `Ybmd9'   `Ybmd9'.JMML  JMML.
 *                                     MM
 *                                   .JMML.
 * This file is part of TeaSpoon.
 *
 * TeaSpoon is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * TeaSpoon is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with TeaSpoon.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author CortexPE
 * @link https://CortexPE.xyz
 *
 */

declare(strict_types = 1);

namespace CortexPE\item\utils;


class FireworksExplosion {
	public const TYPE_SMALL_BALL = 0;
	public const TYPE_LARGE_BALL = 1;
	public const TYPE_STAR_SHAPED = 2;
	public const TYPE_CREEPER_SHAPED = 3;
	public const TYPE_BURST = 4;
	
	public const COLOR_BLACK = 0;
	public const COLOR_RED = 1;
	public const COLOR_GREEN = 2;
	public const COLOR_BROWN = 3;
	public const COLOR_BLUE = 4;
	public const COLOR_PURPLE = 5;
	public const COLOR_CYAN = 6;
	public const COLOR_LIGHT_GRAY = 7;
	public const COLOR_GRAY = 8;
	public const COLOR_PINK = 9;
	public const COLOR_LIME = 10;
	public const COLOR_YELLOW = 11;
	public const COLOR_LIGHT_BLUE = 12;
	public const COLOR_MAGENTA = 13;
	public const COLOR_ORANGE = 14;
	public const COLOR_WHITE = 15;

	/** @var int[] */
	public $fireworkColor = [self::COLOR_BLACK, self::COLOR_BLACK, self::COLOR_BLACK];
	/** @var int[] */
	public $fireworkFade = [self::COLOR_BLACK, self::COLOR_BLACK, self::COLOR_BLACK];
	/** @var bool */
	public $fireworkFlicker = false;
	/** @var bool */
	public $fireworkTrail = false;
	/** @var int */
	public $fireworkType = self::TYPE_SMALL_BALL;
}