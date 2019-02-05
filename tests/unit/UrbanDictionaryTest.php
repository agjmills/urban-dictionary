<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class UrbanDictionaryTest extends TestCase {

    /**
     * @test
     */
    public function it_can_request_wat_from_urban_dictionary()
    {
        $urbanDictionary = new \Asdfx\UrbanDictionary\UrbanDictionary('ca3a830972msh867fa6eeeb7bf66p1dc977jsndfe95b69fedc');
        $result = $urbanDictionary->lookup('wat');
        die(var_dump($result));
    }
}
