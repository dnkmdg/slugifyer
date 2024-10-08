<?php

namespace Dnkmdg\Slugifyer\Config;

/**
 * Class Transliterations
 * @package Dnkmdg\Slugifyer\Config
 */
class Transliterations
{
    /**
     * Table of special characters for transliteration
     */
    private array $transliterationTable = [
        // A with variations
        'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ă' => 'a', 'ą' => 'a', 'ā' => 'a',
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ă' => 'A', 'Ą' => 'A', 'Ā' => 'A',
        
        // C with variations
        'ç' => 'c', 'č' => 'c', 'ć' => 'c', 'ĉ' => 'c',
        'Ç' => 'C', 'Č' => 'C', 'Ć' => 'C', 'Ĉ' => 'C',
        
        // D with variations
        'ð' => 'd', 'đ' => 'd', 'ď' => 'd',
        'Ð' => 'D', 'Đ' => 'D', 'Ď' => 'D',
        
        // E with variations
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ě' => 'e', 'ę' => 'e', 'ē' => 'e', 'ė' => 'e', 'œ' => 'oe', 
        'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ě' => 'E', 'Ę' => 'E', 'Ē' => 'E', 'Ė' => 'E', 'Œ' => 'OE',
        
        // G with variations
        'ĝ' => 'g', 'ğ' => 'g',
        'Ĝ' => 'G', 'Ğ' => 'G',
        
        // H with variations
        'ĥ' => 'h',
        'Ĥ' => 'H',
        
        // I with variations
        'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i', 'į' => 'i', 'ı' => 'i',
        'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Į' => 'I', 'İ' => 'I',
        
        // J with variations
        'ĵ' => 'j',
        'Ĵ' => 'J',
        
        // L with variations
        'ľ' => 'l', 'ł' => 'l',
        'Ľ' => 'L', 'Ł' => 'L',
        
        // N with variations
        'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n',
        'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N', 'Ņ' => 'N',
        
        // O with variations
        'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ő' => 'o', 'ō' => 'o',
        'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ő' => 'O', 'Ō' => 'O',
        
        // R with variations
        'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r',
        'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R',
        
        // S with variations
        'ș' => 's', 'š' => 's', 'ś' => 's', 'ŝ' => 's', 'ş' => 's', 'ß' => 'ss',
        'Ș' => 'S', 'Š' => 'S', 'Ś' => 'S', 'Ŝ' => 'S', 'Ş' => 'S', 'ẞ' => 'SS',
        
        // T with variations
        'ț' => 't', 'ť' => 't', 'ţ' => 't', 'ŧ' => 't',
        'Ț' => 'T', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
        
        // U with variations
        'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ū' => 'u', 'ų' => 'u', 'ů' => 'u',
        'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ū' => 'U', 'Ų' => 'U', 'Ů' => 'U',
        
        // Y with variations
        'ý' => 'y', 'ÿ' => 'y', 'ŷ' => 'y',
        'Ý' => 'Y', 'Ÿ' => 'Y', 'Ŷ' => 'Y',
        
        // Z with variations
        'ž' => 'z', 'ź' => 'z', 'ż' => 'z',
        'Ž' => 'Z', 'Ź' => 'Z', 'Ż' => 'Z',
        
        // TH and SS ligatures
        'þ' => 'th',
        'Þ' => 'TH',
    ];

    /**
     * Get the transliteration table
     * @return array
     */
    public function getTable(): array
    {
        return $this->transliterationTable;
    }
}