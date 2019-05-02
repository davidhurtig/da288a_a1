<?php

namespace Unicorn;

require("Unicorn.php");

class DetailedUnicorn extends Unicorn
{
    private $desc;
    private $reported_by;
    private $spotted_when;
    private $image;

    public function __construct($data)
    {
        #$data = $this->fetchUnicorn($id);
        parent::__construct($data["id"], $data["name"]);
        $this->desc = $data["description"];
        $this->reported_by = $data["reportedBy"];
        $this->spotted_when = substr($data["spottedWhen"], 0, -9);
        $this->image = $data["image"];
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function getReportedBy()
    {
        return $this->reported_by;
    }

    public function getSpottedWhen()
    {
        return $this->spotted_when;
    }

    public function getImage()
    {
        return $this->image;
    }
}
?>