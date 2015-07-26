<?php
namespace DesignPatterns\Adapter;

interface Product
{
    /**
     * @return float
     */
    public function getPrice();

    /**
     * @return float
     */
    public function getPriceWithoutVat();
}
