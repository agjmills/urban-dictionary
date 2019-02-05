<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class UrbanDictionaryTest extends TestCase {

    /**
     * @test
     */
    public function it_can_request_wat_from_urban_dictionary()
    {
        $urbanDictionary = new \Asdfx\UrbanDictionary\UrbanDictionary();
        $result = $urbanDictionary->lookup('wat');

       $this->assertIsArray($result);
    }
}
