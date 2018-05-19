<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 19/05/2018
 * Time: 21:46
 */

namespace Crafter\EventBasket\Strategy;


class TranslateFactory
{

    public static function create($lang)
    {
        switch ($lang) {
            case 'pl':
                $tranlator = new TranslatePl();
                break;
            case 'eng':
                $tranlator = new TranslateEn();
                break;
            case 'de':
                $tranlator = new TranslateDe();
                break;
            default:
                throw new \RuntimeException("Unknown translator");
        }

        return new Context($tranlator);
    }
}