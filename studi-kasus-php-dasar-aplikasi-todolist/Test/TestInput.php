<?php

require_once "helper/Input.php";

$name = input("Name");
echo "Hello, $name" . PHP_EOL;

$channel = input("Channel");
echo "Welcome to $channel" . PHP_EOL;