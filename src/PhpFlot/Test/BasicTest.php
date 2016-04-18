<?php

namespace PhpFlot\Test;

use PHPUnit_Framework_TestCase;

class BasicTest extends PHPUnit_Framework_TestCase {
	public function testCanBeNegated() {
		$graph = new \PhpFlot\LineGraph ( 'graph1' );
		
		$this->assertEquals ( $graph.'', '<div id="graph1" class="line-php-flot"></div>' );
	}
}