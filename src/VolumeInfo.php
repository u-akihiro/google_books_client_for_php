<?php
namespace GoogleBooksAPI;

class VolumeInfo extends Element
{
    private $propertis = [
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
        foreach ($this->propertis as $name) {
            $this->set($name);
        }
    }
}