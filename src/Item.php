<?php

namespace GoogleBooksAPI;

class Item extends Element
{
    private $properties= [
        'kind',
        'id',
        'etag',
        'selfLink',
        'volumeInfo'
    ];

    public function __construct($jsonObj)
    {
        $this->jsonObj = $jsonObj;
        foreach ($this->properties as $name) {
            $this->set($name);
        }
    }
}