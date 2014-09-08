<?php

ini_set('display_errors', true);

class Objs extends MarvinTestCase {
	function test1Scrict() {
		$t = new stdClass;
		$t->name = 'hi';
		$a = new stdClass;
		$a->name = 'hi';
		assertEquals($t, $a);
	}
	function test1Plain() {
		$t = new stdClass;
		$t->name = 'hi';
		$a = new stdClass;
		$a->name = 'hi';
		assertEquals($t, $a, false);
	}
}