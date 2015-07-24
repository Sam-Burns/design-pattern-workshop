<?php
namespace DesignPatterns\ValueObject;

class Money
{
    /** @var float */
    private $floatValue;

    /** @var string */
    private $currencySymbol;

    /**
     * @param string $moneyAsString
     * @return Money
     */
    public static function constructFromString($moneyAsString)
    {
        // @todo
    }

    /**
     * @param float $floatValue
     * @return Money
     */
    public static function constructFromFloatValueInPounds($floatValue)
    {
        // @todo
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        // @todo
    }

    /**
     * @return float
     */
    public function getFloatValue()
    {
        // @todo
    }

    /**
     * @return string
     */
    public function __toString()
    {
        // @todo
    }

    /**
     * @return Money
     */
    public function withVatAdded()
    {
        // @todo
    }
}
