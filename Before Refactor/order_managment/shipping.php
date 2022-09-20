<?php

class shipping
{
    public $s_name;
    public $s_cost;
    public $s_tax;

    public function calculate_tax($address){
        if ($this->s_name == 'aramex'){
            if ($address->o_country == 'egypt'){
                return $this->s_tax + .14;
            }
            elseif ($address->o_country == 'kuwait'){
                return $this->s_tax + .1;
            }
        }
        elseif($this->s_name == 'fedex'){
            if ($address->o_country == 'egypt'){
                return $this->s_tax + .20;
            }
            elseif ($address->o_country == 'kuwait'){
                return $this->s_tax + .13;
            }
        }
    }

    public function notify($message){
        /**
         * TODO
         * we need to add channel to send notification to shipping company but not now
         */
    }
}