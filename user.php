<?php
class Users
{
    private $firstName;
    function setFirstName($value)
    {
        $this->firstName = $value;
    }
    function getFirstName()
    {
        return $this->firstName;
    }
}


$users = new Users();
$users->setFirstName("moses");

echo $users->getFirstName();
