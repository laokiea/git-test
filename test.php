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

	public function __get(string $name) {
		return ["1","4","5"];
	}
}

doNothing()->call(1,2,3,4,5);
$a = doNothing()->a;
print_r($a);


// debug
Class Debug implements \JsonSerializable {
	public function jsonSerialize() : array {
			return array(
				"class_name" => get_class(),
			);
	}
}

$debug = new Debug;
if ($debug instanceof \JsonSerializable) {
	print_r(json_encode($debug));
}