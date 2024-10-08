<?php

namespace Dnkmdg\Slugifyer\Config;

class Config
{
    public array $transliterationTable = [
        'à' => 'a', 
        'ç' => 'c', 
        'é' => 'e', 
        'è' => 'e', 
        'ñ' => 'n',
        'ß' => 'ss',
        'ù' => 'u', 
        'ü' => 'u', 
        'ÿ' => 'y',
        'å' => 'a', 
        'ä' => 'a', 
        'æ' => 'ae', 
        'ö' => 'o', 
        'ø' => 'o', 
        'œ' => 'oe', 
        'þ' => 'th',
        'á' => 'a',
        'í' => 'i',
        'ó' => 'o',
        'ú' => 'u',
        'ý' => 'y',
        'ă' => 'a',
        'â' => 'a',
        'ê' => 'e',
        'î' => 'i',
        'ô' => 'o',
        'û' => 'u',
        'ă' => 'a',
        'â' => 'a',
        'î' => 'i',
        'ș' => 's',
        'ț' => 't',
        'Ă' => 'A',
        'Â' => 'A',
        'Î' => 'I',
        'Ș' => 'S',
        'Ț' => 'T',
    ];

    public function getTransliterationTable(): array
    {
        return $this->transliterationTable;
    }
}