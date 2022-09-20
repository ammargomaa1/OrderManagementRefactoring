<?php

class products
{
    public $_name;
    public $_quantity;
    public $_category;
    public $_attributes;
    public $_price;

    public function get_name(){
        return $this->_name;
    }

    public function get_quantity(){
        return $this->_quantity;
    }

    public function get_category(){
        return $this->_category;
    }

    public function get_attributes(){
        return $this->_attributes;
    }

    public function get_price(){
        return $this->_price;
    }
    
    public function calculate_price(){
        foreach ($this->_attributes as $key => $attribute){
            if ($key == 'size'){
                if ($attribute == 'small') {
                    $this->_price -= 10;
                }
                elseif ($attribute == 'medium') {
                    $this->_price += 20;
                }
                elseif ($attribute == 'large') {
                    $this->_price += 50;
                }
                else {
                    throw new exception("error in size");
                }
            }
            elseif ($key == 'color'){
                if ($attribute == 'white') {
                    $this->_price -= 15;
                }
                elseif ($attribute == 'red') {
                    $this->_price += 20;
                }
                elseif ($attribute == 'blue') {
                    $this->_price += 18;
                }
                else {
                    throw new exception("error in color");
                }
            }
            else {
                throw new exception("error in attribute");
            }
        }
        return $this->_price;
    }
}