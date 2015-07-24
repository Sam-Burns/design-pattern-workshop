<?php
namespace DesignPatterns\Decorator\DataGetter;

use DesignPatterns\Decorator\DataGetter;

class DataFromFileGetter implements DataGetter
{
    /**
     * @return string
     */
    public function getNameOfDesignPattern()
    {
        $filename = __DIR__ . '/../../data/data.json';
        $fileContents = file_get_contents($filename);
        $parsedContents = json_decode($fileContents, true);
        return $parsedContents['pattern-name'];
    }
}
