<?php

namespace Asdfx\UrbanDictionary;

use Tightenco\Collect\Support\Collection;
use Zttp\Zttp;

class UrbanDictionary {
    /**
     * @var string|null
     */
    protected $apiKey = null;

    /**
     * UrbanDictionary constructor.
     * @param string|null $apiKey
     * @throws \Exception
     */
    public function __construct(?string $apiKey = null)
    {
        if ($apiKey === null) {
            throw new \Exception('Please provide an API key');
        }
        $this->apiKey = $apiKey;
    }

    /**
     * Given a string, return an array of definitions for that string
     *
     * @param string|null $query
     * @return array
     * @throws \Exception
     */
    public function lookup(string $query = null): array
    {
        if ($query === null) {
            throw new \Exception('No query was provided');
        }

        $response = Zttp::get(sprintf('https://api.urbandictionary.com/v0/define?term=%s', $query));

        if ($response->isOk() === false) {
            throw new \Exception('API Request failed');
        }

        return (new Collection($response->json()['list']))->map(function ($definition) {
            return trim(preg_replace('/\s+/', ' ', $definition['definition']));
        })->toArray();
    }
}

