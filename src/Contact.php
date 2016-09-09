<?php
    class Contact
    {
    private $first_name;
    private $last_name;
    private $street;
    private $city;
    private $state;
    private $zip;
    private $phone;
    private $email;
    private $initials;

    function __construct($first_name, $last_name, $street, $city, $state, $zip, $phone, $email)
        {
        $this->first_name = ucwords(strtolower($first_name));
        $this->last_name = ucwords(strtolower($last_name));
        $this->street = ucwords(strtolower($street));
        $this->city = ucwords(strtolower($city));
        $this->state = strtoupper($state);
        $this->zip = $zip;
        $this->phone = $phone;
        $this->email = $email;
        $this->intials = strtoupper(substr($this->first_name, 0, 1) . substr($this->last_name, 0, 1));
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
    function getEmail()
    {
        return $this->email;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function getInitials()
    {
        return $this->initials;
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
