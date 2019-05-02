<?php

namespace Unicorn;

require("Unicorn.php");
#require("./helpers/apiCall.php");

use Unicorn\Unicorn;


class Unicorns
{
    private $unicorns = array();

    public function __construct($data)
    {
        // $data = $this->fetchUnicorns();
        $this->addUnicorns($data);
    }

    public function getUnicorns()
    {
        return $this->unicorns;
    }

    private function addUnicorns($data)
    {
        #echo(print_r($data,true));
        foreach ($data as $value) {
            $id = $value["id"];
            $name = $value["name"];
            $details = $value["details"];

            if (strlen($name) != 0) {
                $unicorn = New Unicorn($id, $name, $details);
                array_push($this->unicorns, $unicorn);
            }
        }
    }
}
?>