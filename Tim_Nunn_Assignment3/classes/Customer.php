<?php


class Customer
{
    public $firstname;
    public $lastname;
    public $email;
    public $address;
    public $phonenumber;

    public function __construct(string $firstname, string $lastname, string $email, string $address, int $phonenumber)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->address = $address;
        $this->phonenumber = $phonenumber;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getPhonenumber(): int
    {
        return $this->phonenumber;
    }


}