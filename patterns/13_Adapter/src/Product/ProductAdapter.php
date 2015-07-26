<?php
namespace DesignPatterns\Adapter\Product;

use DesignPatterns\Adapter\Product;

class ProductAdapter implements Product
{
    /** @var ThirdPartyLibraryProduct */
    private $thirdPartyLibraryProduct;

    /**
     * @param ThirdPartyLibraryProduct $thirdPartyLibraryProduct
     */
    public function __construct(ThirdPartyLibraryProduct $thirdPartyLibraryProduct)
    {
        $this->thirdPartyLibraryProduct = $thirdPartyLibraryProduct;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        // @todo Implement Adapter Pattern
    }

    /**
     * @return float
     */
    public function getPriceWithoutVat()
    {
        // @todo Implement Adapter Pattern
    }
}
