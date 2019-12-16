<?php
namespace GoogleBooksAPI;

class VolumeInfo extends Element
{
    private $properties = [
        'title',
        'subtitle',
        'publisher',
        'publishedDate',
        'description',
        'pageCount',
    ];

    public function __construct($jsonObj)
    {
        $this->jsonObj = $jsonObj;
        foreach ($this->properties as $name) {
            $this->set($name);
        }
    }
}