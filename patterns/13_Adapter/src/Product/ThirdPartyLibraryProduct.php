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
     * @return int
     */
    public function getNumberInStock()
    {
        return 12;
    }

    /**
     * @return float
     */
    public function getPriceWithVat()
    {
        return 4.20;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Sausages';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Some sausages';
    }
}
