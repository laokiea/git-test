<?php

function push(int $a):int{
	return $a;
}


// print_r(push(3));

function judge(int $v) : bool {
	if ($v == 1) {
		return true;
	}
	return false;
}

function doNothing() : Nothing {
	return new Nothing;
}

Class Nothing {
	public function __set(string $name, $value) {
		$this->$name = $value;
	}

	public function __call($name, $arguments) {
		print_r($arguments);
	}
}

doNothing()->call(1,2,3,4,5);