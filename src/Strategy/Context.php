<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 21:26
 */

namespace Crafter\EventBasket\Strategy;


class Context implements TranslateInterface
{
    /**
     * @var TranslateInterface
     */
    private $translator;

    /**
     * Context constructor.
     * @param TranslateInterface $translator
     */
    public function __construct(TranslateInterface $translator)
    {
        $this->translator = $translator;
    }

    public function translate()
    {
        return $this->translator->translate();
    }


}