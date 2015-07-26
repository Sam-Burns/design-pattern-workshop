<?php
namespace DesignPatterns\Adapter\Product;

class ThirdPartyLibraryProduct
{
    /**
     * @return float
     */
    public function getPrice()
    {
        return 3.50;
    }

    /**
     * @return float
     */
    public function getPriceWithVat()
    {
        return 4.20;
    }
}
