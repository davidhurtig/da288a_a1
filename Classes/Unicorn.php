<?php

namespace Unicorn;

class Unicorn
{
    private $id;
    private $name;
    private $details;
    
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}

?>