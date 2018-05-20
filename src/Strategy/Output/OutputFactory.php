<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 20/05/2018
 * Time: 12:49
 */

namespace Crafter\EventBasket\Strategy\Output;


class OutputFactory
{
    private function __construct()
    {
    }

    public static function create(array $data,OutputInterface $output)
    {
        $client =  new Client($data,$output);
        return $client->loadOutput();
    }
}