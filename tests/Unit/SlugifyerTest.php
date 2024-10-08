<?php

use Dnkmdg\Slugifyer\Slugifyer;

describe('Make slugs', function () {
    it('can create a slug from a regular string', function () {
        $string = 'Hello World';
        $expectedSlug = 'hello-world';

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    it('replaces special Latin characters with closest counterparts', function () {
        $string = 'Héllo Wörld! åäö ñ';
        $expectedSlug = 'hello-world-aao-n';

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    it('removes non-latin characters except allowed ones', function () {
        $string = 'Héllo Wörld 123! çüñ %$#';
        $expectedSlug = 'hello-world-123-cun';

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    it('removes multiple spaces and dashes', function () {
        $string = 'Hello    World   ';
        $expectedSlug = 'hello-world';

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    it('handles leading and trailing spaces correctly', function () {
        $string = '   Hello World   ';
        $expectedSlug = 'hello-world';

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    it('removes special characters and trims properly', function () {
        $string = ' !! Hello Wörld!?   ';
        $expectedSlug = 'hello-world';

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    // Test for Chinese characters
    it('handles Chinese characters correctly', function () {
        $string = '你好 世界'; // "Hello World" in Chinese
        $expectedSlug = '你好-世界'; // Chinese characters should remain, spaces replaced by dashes

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    // Test for Japanese characters
    it('handles Japanese characters correctly', function () {
        $string = 'こんにちは 世界'; // "Hello World" in Japanese
        $expectedSlug = 'こんにちは-世界'; // Japanese characters should remain, spaces replaced by dashes

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    // Test for Korean characters
    it('handles Korean characters correctly', function () {
        $string = '안녕하세요 세계'; // "Hello World" in Korean
        $expectedSlug = '안녕하세요-세계'; // Korean characters should remain, spaces replaced by dashes

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    // Test for mix of Latin and Chinese characters
    it('handles a mix of Latin and Chinese characters', function () {
        $string = 'Hello 你好 World';
        $expectedSlug = 'hello-你好-world'; // Latin should be lowercase, Chinese should remain intact, spaces replaced

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    // Test for mix of Latin and Japanese characters
    it('handles a mix of Latin and Japanese characters', function () {
        $string = 'Hello こんにちは World';
        $expectedSlug = 'hello-こんにちは-world'; // Latin should be lowercase, Japanese should remain intact, spaces replaced

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    // Test for mix of Latin and Korean characters
    it('handles a mix of Latin and Korean characters', function () {
        $string = 'Hello 안녕하세요 World';
        $expectedSlug = 'hello-안녕하세요-world'; // Latin should be lowercase, Korean should remain intact, spaces replaced

        expect($expectedSlug)->toBe(Slugifyer::make($string));
    });

    it('transliterates accented Latin characters correctly', function () {
        $string = "ÀÁÂÃÄÅÆ Ç ÈÉÊË ÌÍÎÏ Ñ ÒÓÔÕÖØ Œ ÙÚÛÜ ÝŸ Þ ß";
        $expectedSlug = "aaaaaaae-c-eeee-iiii-n-oooooo-oe-uuuu-yy-th-ss";
        
        expect(Slugifyer::make($string))->toBe($expectedSlug);
    });
    
    it('transliterates Eastern European characters correctly', function () {
        $string = "Ă Â Î Ș Ț ă â î ș ț";
        $expectedSlug = "a-a-i-s-t-a-a-i-s-t";
        
        expect(Slugifyer::make($string))->toBe($expectedSlug);
    });
    
    it('transliterates Polish and Czech characters correctly', function () {
        $string = "Ł Ż Ź Š Ž Ř Ń Č Ľ Ť";
        $expectedSlug = "l-z-z-s-z-r-n-c-l-t";
        
        expect(Slugifyer::make($string))->toBe($expectedSlug);
    });
    
    it('transliterates Romanian characters correctly', function () {
        $string = "ș Ș ț Ț â Â ă Ă";
        $expectedSlug = "s-s-t-t-a-a-a-a";
        
        expect(Slugifyer::make($string))->toBe($expectedSlug);
    });
    
    it('handles special ligatures correctly', function () {
        $string = "æ œ ß";
        $expectedSlug = "ae-oe-ss";
        
        expect(Slugifyer::make($string))->toBe($expectedSlug);
    });
    
    it('transliterates mixed string with accents correctly', function () {
        $string = "Héllo Wörld! Ça va bien? Æ Ø Ñ Š Č Œ ß";
        $expectedSlug = "hello-world-ca-va-bien-ae-o-n-s-c-oe-ss";
        
        expect(Slugifyer::make($string))->toBe($expectedSlug);
    });
    
    it('transliterates complex string with multiple accented and special characters', function () {
        $string = "Àlphà, Béthä, Ómégâ, Æxôñ, Þørñ!";
        $expectedSlug = "alpha-betha-omega-aexon-thorn";
        
        expect(Slugifyer::make($string))->toBe($expectedSlug);
    });
});
