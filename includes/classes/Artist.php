<?php


class Artist
{
    private $con;
    private $id;

    public function __construct($con, $id)
    {
        $this->con = $con;
        $this->id = $id;
    }

    public function getName() {
        $artistQuery = mysqli_query($this->con, "SELECT name FROM Artists WHERE id='$this->id'");
        return mysqli_fetch_array($artistQuery)['name'];
    }
}