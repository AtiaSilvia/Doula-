<?php

    class PregnantWoman{

        public $username;
        public $email;
        public $password;
        public $birthDate;
        public $number;
        public $address;
        public $weight;
        public $pregnancyWeek;
        public $deliveryWeek;

        function __construct ($username, $email, $password, $birthDate, $number, $address, $weight, $pregnancyWeek, $deliveryWeek){

            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->birthDate = $birthDate;
            $this->number = $number;
            $this->address = $address;
            $this->while = $weight;
            $this->pregnancyWeek = $pregnancyWeek;
            $this->deliveryWeek = $deliveryWeek;
        }

    }

?>