<?php

use Crafter\EventBasket\Strategy\Context;
use Crafter\EventBasket\Strategy\TranslateDe;
use Crafter\EventBasket\Strategy\TranslateEn;
use Crafter\EventBasket\Strategy\TranslateFactory;
use Crafter\EventBasket\Strategy\TranslatePl;

require 'vendor/autoload.php';

$lang = 'de';
echo TranslateFactory::create($lang)->translate();




?>