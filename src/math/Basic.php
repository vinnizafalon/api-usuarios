<?php
namespace Projetux\math;

class Basic
{
    /**
     * @return int|float
     */
    public function soma(int|float $numero, int|float $numero2)
    {
        return $numero + $numero2;

    }
    /**
     * @return int|float
     */
    public function subtrai(int|float $numero, int|float $numero2)

    {
        return $numero - $numero2;
    }
    /**
     * @return int|float
     */
    public function multi(int|float $numero, int|float $numero2)

    {
        return $numero * $numero2;
    }
    /**
     * @return int|float
     */
    public function div(int|float $numero, int|float $numero2)

    {
        return $numero / $numero2;
    }
        /**
     * @return int|float
     */
    public function pot(int|float $numero)

    {
        return $numero ** 2;
    }
        /**
     * @return int|float
     */
    public function raiz(int|float $numero)

    {
        return sqrt ($numero);
    }
}