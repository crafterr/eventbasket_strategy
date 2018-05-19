<?php
namespace Crafter\EventBasket\Classes;

interface PupilClassInterface
{
    public function getName();

    public function addPupil(PupilInterface $pupil);

    public function getPupils();
}