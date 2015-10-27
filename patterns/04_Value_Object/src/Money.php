<?php
namespace DesignPatterns\ValueObject;

class Money
{
    /** @var float */
    private $floatValue;

    /** @var string */
    private $currencySymbol;

    /**
     * @param float $floatValue
     * @param string $currencySymbol
     */
    public function __construct($floatValue, $currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;
        $this->floatValue = $floatValue;

    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * @return float
     */
    public function getFloatValue()
    {
        return $this->floatValue;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->currencySymbol.$this->floatValue;
    }
}
