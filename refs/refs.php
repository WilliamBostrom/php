<?php

$person = "John";
$client = &$person;
var_dump($client, $person);
$client = "Jane";

var_dump($client, $person);

$person = "John";

var_dump($client, $person);
