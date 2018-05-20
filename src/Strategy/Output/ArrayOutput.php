<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 20/05/2018
 * Time: 12:41
 */

namespace Crafter\EventBasket\Strategy\Output;


class ArrayOutput implements OutputInterface
{
    public function load(array $data)
    {
        return $data;
    }

}