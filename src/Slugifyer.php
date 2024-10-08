<?php

namespace Dnkmdg\Slugifyer;

use Dnkmdg\Slugifyer\Config\Config;

class Slugifyer
{
    public function make($string)
    {
        function make_slug($string)
    {
        // Convert the string to lowercase
        $slug = mb_strtolower($string);

        // Replace special Latin characters
        $transliterationTable = (new Config())->getTransliterationTable();

        $slug = strtr($slug, $transliterationTable);

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
    }
    
}