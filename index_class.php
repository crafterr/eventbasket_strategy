<?php

use Crafter\EventBasket\Classes\Pupil;
use Crafter\EventBasket\Classes\PupilClass;
use Crafter\EventBasket\Classes\PupilJunior;

require 'vendor/autoload.php';



$class1a = new PupilClass('1 a');
$class1b = new PupilClass('1 b');
$class1c = new PupilClass('1 c');

$pupil1 = new Pupil('Adam','Pietras');
$pupil2 = new Pupil('Maciek','Grzegorczyk');
$pupil3 = new Pupil('Pawel','Grzeszczak');
$juniorPupil = new PupilJunior(new Pupil('Maly','Adas'));

$class1a->addPupil($pupil1);
$class1a->addPupil($pupil2);
$class1a->addPupil($pupil3);
$class1a->addPupil($juniorPupil);

dump($class1a->getPupils());
/**
 * @var \Crafter\EventBasket\Classes\PupilInterface $pupil
 */
foreach ($class1a->getPupils() as $pupil)
{
    echo $pupil->getFirstName().' '.$pupil->getLastName().'| ';
}





?>