<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 20/05/2018
 * Time: 12:44
 */

namespace Crafter\EventBasket\Strategy\Output;


class SerializeOutput implements OutputInterface
{
    public function load(array $data)
    {
        return serialize($data);
    }

}