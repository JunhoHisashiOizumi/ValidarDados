<?php

namespace OizumiJunho\ValidarDados;

use DateTime;

class ValidarDados
{

    public static function ValidarHoraHHMMSS($dados, $format = 'H:i:s')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarHoraHHMM($dados, $format = 'H:i')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarHoraMM($dados, $format = 'i')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataHH($dados, $format = 'H')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataDDMMAAAA($dados, $format = 'd/m/Y')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataAAAAMMDD($dados, $format = 'Y/m/d')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataAAAAMMDDHHMMSS($dados, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataAAAAMMDDHHMM($dados, $format = 'Y-m-d H:i')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }
}
