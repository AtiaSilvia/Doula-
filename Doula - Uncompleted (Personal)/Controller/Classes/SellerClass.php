<?php

    class Seller{

        public $username;
        public $email;
        public $password;
        public $gender;
        public $birthDate;
        public $number;
        public $address;
        public $shopName;
        public $tradeLicenceNumber;
        public $nidCard;
        public $bankAccountNumber;
        public $bankCardNumber;

        function __construct ($username, $email, $password, $gender, $birthDate, $number, $address, $nidCard, $shopName, $tradeLicenceNumber, $bankAccountNumber, $bankCardNumber){

            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->gender = $gender;
            $this->birthDate = $birthDate;
            $this->number = $number;
            $this->address = $address;
            $this->shopName = $shopName;
            $this->tradeLicenceNumber = $tradeLicenceNumber;
            $this->nidCard = $nidCard;
            $this->bankAccountNumber = $bankAccountNumber;
            $this->bankCardNumber = $bankCardNumber;
        }

    }

?>