<?php
namespace DesignPatterns\Adapter\Test;

use DesignPatterns\Adapter\Product\ProductAdapter;
use DesignPatterns\Adapter\Product\ThirdPartyLibraryProduct;
use PHPUnit_Framework_TestCase as TestCase;

class AdapterTest extends TestCase
{
    /** @var ProductAdapter */
    private $product;

    public function setUp()
    {
        $thirdPartyLibraryObject = new ThirdPartyLibraryProduct();
        $this->product = new ProductAdapter($thirdPartyLibraryObject);
    }

    public function testGetPrice()
    {
        // ACT
        $result = $this->product->getPrice();

        // ASSERT
        $this->assertEquals(4.20, $result);
    }

    public function testGetPriceWithoutVat()
    {
        // ACT
        $result = $this->product->getPriceWithoutVat();

        // ASSERT
        $this->assertEquals(3.50, $result);
    }
}
