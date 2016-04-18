<?php

/*
 * This file is part of the PhpFlot package.
 *
 * (c) 2016 Loogaroo
 *
 * For the full copyright and license information, please view the LICENSE
 * file
 */

namespace PhpFlot;

class LineGraph extends AbstractGraph {
	protected $class="line-php-flot";
	public function __construct($id) {
		$this->setId($id);
	}
}