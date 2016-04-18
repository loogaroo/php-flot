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

class AbstractGraph {
	
	protected $id='graph1';
	protected $attributes=array();
	protected $class='';
	
	public function getClass() {
		return $this->class;
	}
	public function setId($id) {
		$this->id=$id;
	}
	public function getId() {
		return $this->id;
	}
	public function __toString() {
		return '<div id="'.$this->getId().'" class="'.$this->getClass().'"></div>';
	}
}