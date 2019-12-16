<?php

namespace GoogleBooksAPI;

class VolumeList extends Element
{
    private $properties= [
        'kind',
        'items',
        'totalItems'
    ];

    public function __construct($jsonObj)
    {
        $this->jsonObj = $jsonObj;
        foreach ($this->properties as $name) {
            $this->set($name);
        }
    }
}