<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 20/05/2018
 * Time: 12:43
 */

namespace Crafter\EventBasket\Strategy\Output;


class JsonOutput implements OutputInterface
{
    public function load(array $data)
    {
        return json_encode($data);
    }

}