<?php

namespace GoogleBooksAPI;

use Cake\Utility\Inflector;

class Element
{
    protected function set($name)
    {
        switch(gettype($this->jsonObj->$name)){
            case "integer":
                $this->$name = $this->jsonObj->$name;
            break;
            case "string":
                $this->$name = $this->jsonObj->$name;
            break;
            case "array":
                $class = ucwords($name);
                $class =  Inflector::singularize($class);
                $class =  __NAMESPACE__ .'\\'. $class;
                foreach ($this->jsonObj->$name as $el) {
                    $this->$name[] = new $class($el) ;
                }
            break;
            case "object":
                $class = ucwords($name);
                $class =  __NAMESPACE__ .'\\'. $class;
                $this->$name = new $class($this->jsonObj->$name);
            break;
        }
    }
}