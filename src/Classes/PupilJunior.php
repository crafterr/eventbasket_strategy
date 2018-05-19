<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 14:52
 */

namespace Crafter\EventBasket\Classes;


class PupilJunior implements PupilInterface
{

    /**
     * @var PupilInterface
     */
    protected $pupil;

    /**
     * PupilJunior constructor.
     * @param PupilInterface $pupil
     */
    public function __construct(PupilInterface $pupil)
    {
        $this->pupil = $pupil;
    }


    public function getFirstName()
    {
        return '* '.$this->pupil->getFirstName();
    }

    public function getLastName()
    {
        return $this->pupil->getLastName();
    }

}