<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 14:34
 */

namespace Crafter\EventBasket\Classes;


class PupilClass implements PupilClassInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var \ArrayObject
     */
    private $pupils = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     *
     */
    public function getName()
    {
        return $this->name;
    }

    public function addPupil(PupilInterface $pupil)
    {
       $this->pupils[] = $pupil;
    }

    public function getPupils()
    {
        return $this->pupils;
    }


}