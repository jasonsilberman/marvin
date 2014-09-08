Marvin
=====


Marvin is a simple PHP testing script.

## Installation
All you have to do is download the file located in `bin/marvin` and make it executable. Marvin is just one file.

*You might also want to add it to your `$PATH`.*

## Usage
Using Marvin requires two steps.

1. Create test cases
2. Run Marvin.

### Creating Test Cases
A Marvin test case looks like this:

```php
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
```

That test case would live in a file named `one_eq_1.php`, or `oneEq1.php` (capitalization shouldn't matter).

### Run Marvin
Marvin is just a CLI. This is all you do:

```
marvin directory/to/tests
```

It will tell you if the tests pass or fail. If a test fails it will give you some info about why it failed.

## Asserts
Marvin provides three assert functions: `assertEquals`, `assertTrue`, and `assertFalse`.

All of Marvin's assert functions take a optional last parameter: `$scrict`. These tell Marvin if he should use `==` or `===`. `$scrict` will default to `true`.

## License
Marvin is licensed under the MIT license. See the `LICENSE` file for more.
