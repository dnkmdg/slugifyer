<?php

namespace Dnkmdg\Slugifyer;

use Dnkmdg\Slugifyer\Config\Config;
use Dnkmdg\Slugifyer\Config\Transliterations;

/**
 * Class Slugifyer
 * @package Dnkmdg\Slugifyer
 */
class Slugifyer
{
    /**
     * Table of special characters for transliteration
     */
    private array $transliterationTable;

    /**
     * The string to be converted to a slug
     */
    private string $string;

    /**
     * Slugifyer constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
        $this->transliterationTable = (new Transliterations())->getTable();
    }

    /**
     * Convert a string to a slug
     * @param string $string
     * @return string
     */
    public function makeSlug($string): string
    {
        // Convert the string to lowercase
        $slug = mb_strtolower($string);

        // Replace special Latin characters
        $slug = strtr($slug, $this->transliterationTable);

        // Remove non-latin characters except dashes, letters, and numbers
        $slug = preg_replace('/[^\p{L}\p{N}\s-]+/u', '', $slug);

        // Replace spaces with dashes
        $slug = preg_replace('/\s+/', '-', $slug);

        // Remove multiple consecutive dashes
        $slug = preg_replace('/-+/', '-', $slug);

        // Trim dashes from the beginning and end
        $slug = trim($slug, '-');

        return $slug;
    }

    /**
     * Make a slug from the string
     * @return string
     */
    public static function make($string): string
    {
        return (new self($string))->makeSlug($string);
    }
    
}