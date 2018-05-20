<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 20/05/2018
 * Time: 12:45
 */

namespace Crafter\EventBasket\Strategy\Output;


class Client
{
    private $output;

    private $data;

    public function __construct(array $data,OutputInterface $output)
    {
        $this->output = $output;
        $this->data = $data;
    }

    public function loadOutput()
    {
        return $this->output->load($this->data);
    }
}