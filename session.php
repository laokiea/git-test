<?php
session_start([
	"save_path" => "/tmp",
]);
$_SESSION["name"] = "jax1";
print_r($_SESSION);
phpinfo();