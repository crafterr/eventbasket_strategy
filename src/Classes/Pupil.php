<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 14:31
 */

namespace Crafter\EventBasket\Classes;


class Pupil implements PupilInterface
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;


    public function __construct(string $firstname, string $lastname)
    {
        $this->firstName = $firstname;
        $this->lastName = $lastname;
    }

    public function getFirstName()
    {
       return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

}