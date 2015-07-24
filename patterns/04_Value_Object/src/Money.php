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

    }

    /**
     * @param float $floatValue
     * @return Money
     */
    public static function constructFromFloatValueInPounds($floatValue)
    {

    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return '$';
    }

    /**
     * @return float
     */
    public function getFloatValue()
    {
        return 0.0;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '';
    }

    /**
     * @return Money
     */
    public function withVatAdded()
    {

    }
}
