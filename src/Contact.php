<?php
    class Contact
    {
    private $first_name;
    private $last_name;
    private $street;
    private $city;
    private $state;
    private $zip;
    private $image;
    function __construct($first_name, $last_name, $street, $city, $state, $zip, $image)
        {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->image = $image;
        }
    function getfirst_Name()
        {
        return $this->first_name;
        }
    function getlast_Name()
        {
        return $this->last_name;
        }
    function getStreet()
        {
        return $this->street;
        }
    function getCity()
        {
        return $this->city;
        }
    function getState()
    {
        return $this->state;
    }
    function getZip()
    {
        return $this->zip;
    }
    function save()
    {
        array_push($_SESSION["list_of_contacts"], $this);
    }
    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
     }
    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = "";
    }

    }

 ?>
