<?php

namespace Asdfx\UrbanDictionary;

class UrbanDictionary
{
    /**
     * Given a string, return an array of definitions for that string
     *
     * @param string|null $query
     * @return array
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lookup(string $query = null): array
    {
        if ($query === null) {
            throw new \Exception('No query was provided');
        }

        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET', sprintf('https://api.urbandictionary.com/v0/define?term=%s', $query));

        if ($request->getStatusCode() !== 200) {
            throw new \Exception('API Request failed');
        }

        return $this->toArray($request->getBody()->getContents());
    }

    /**
     * Take the JSON response from UrbanDictionary API and return it as an array of definitions.
     *
     * @param string $json
     * @return array
     */
    private function toArray(string $json): array
    {
        $data = json_decode($json);
        $definitions = [];
        foreach ($data->list as $definition) {
            $definitions[] = $this->sanitiseDefinition($definition->definition);
        }
        return $definitions;
    }

    /**
     * Sanitise the definition by removing newlines, and square brackets [ and ]
     *
     * @param $string
     * @return string
     */
    private function sanitiseDefinition($string): string
    {
        $string = trim(preg_replace('/\s\s+/', ' ', $string));
        $string = str_replace('[', '', $string);
        $string = str_replace(']', '', $string);
        return $string;
    }
}

