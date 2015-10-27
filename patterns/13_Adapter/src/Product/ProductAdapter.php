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
            return $this->thirdPartyLibraryProduct->getPriceWithVat();
    }

    /**
     * @return float
     */
    public function getPriceWithoutVat()
    {
        return $this->thirdPartyLibraryProduct->getPrice();
    }
}
