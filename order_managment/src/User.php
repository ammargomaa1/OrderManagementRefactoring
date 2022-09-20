<?php

namespace OrderManagement;
class User
{
    private $userName;
    private Address $userAddress;
    private $userAge;
    private $userGender;
    private $userImage;

    public function notify($message){
        /**
         * TODO
         * we need to add channel to send notification to user but not now
         */
    }


    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    public function getUserAddress()
    {
        return $this->userAddress;
    }


    public function setUserAddress(Address $userAddress)
    {
        $this->userAddress = $userAddress;

        return $this;
    }


    public function getUserAge()
    {
        return $this->userAge;
    }


    public function setUserAge($userAge)
    {
        $this->userAge = $userAge;

        return $this;
    }


    public function getUserGender()
    {
        return $this->userGender;
    }


    public function setUserGender($userGender)
    {
        $this->userGender = $userGender;

        return $this;
    }


    public function getUserImage()
    {
        return $this->userImage;
    }


    public function setUserImage($userImage)
    {
        $this->userImage = $userImage;

        return $this;
    }
}