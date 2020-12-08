<?php
//use Zoo\class\Animal;
//use Zoo\Domain\Cats;
//use Zoo\Domain\Dogs;

require_once  __DIR__ . '/classes/animal.php';
require_once  __DIR__ . '/classes/cats.php';
require_once  __DIR__ . '/classes/dogs.php';

$Cat = new cats("Felix", "cat", "russian blue", "small");

echo $Cat->getCName();
echo $Cat->getType();
echo $Cat->getBreed();
echo $Cat->getSize();

