<?php
namespace OrderManagement;


class Address
{
    private $city;
    private $street;
    private $country;
    private $nearestPoint;
    private $map;


    public function getCity()
    {
        return $this->city;
    }


    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }


    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }


    public function getCountry()
    {
        return $this->country;
    }


    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }


    public function getNearestPoint()
    {
        return $this->nearestPoint;
    }


    public function setNearestPoint($nearestPoint)
    {
        $this->nearestPoint = $nearestPoint;

        return $this;
    }


    public function getMap()
    {
        return $this->map;
    }


    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }
}