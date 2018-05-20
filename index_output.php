<?php


use Crafter\EventBasket\Strategy\Output\ArrayOutput;
use Crafter\EventBasket\Strategy\Output\Client;
use Crafter\EventBasket\Strategy\Output\JsonOutput;
use Crafter\EventBasket\Strategy\Output\OutputFactory;
use Crafter\EventBasket\Strategy\Output\SerializeOutput;

require 'vendor/autoload.php';

$data = [
    1 => 'Adam',
    2 => 'Grzes',
    3 => 'Maciek'
];

$json = OutputFactory::create($data,new JsonOutput());

$array = OutputFactory::create($data,new ArrayOutput());

$serialize = OutputFactory::create($data, new SerializeOutput());

dump($json);

dump($array);

dump($serialize);
