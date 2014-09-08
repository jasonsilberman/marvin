<?php

class OneEq1 extends MarvinTestCase {
	function greetings() {
		assertEquals('hi', 'hi');
	}
	function numbers() {
		assertEquals(1, 2);
	}
	function names() {
		assertEquals('joe', 'frank');
	}
}