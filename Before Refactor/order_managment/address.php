<?php

class address
{
    public $o_city;
    public $o_street;
    public $o_country;
    public $o_nearest_point;
    public $o_map;

    public function get_o_city()
    {
        return $this->o_city;
    }

    public function get_o_street()
    {
        return $this->o_street;
    }

    public function get_o_country()
    {
        return $this->o_country;
    }

    public function get_o_nearest_point()
    {
        return $this->o_nearest_point;
    }

    public function get_o_map()
    {
        return $this->o_map;
    }
}