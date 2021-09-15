<?php

    class Advert{
        private $cName;
        private $email;
        private $phoneNr;
        private $cLength;
        private $adType;
        private $moreInfo;

            public function __construct($cName,$email,$phoneNr,$cLength,$adType,$moreInfo)
            {
                $this->cName=$cName;
                $this->email=$email;
                $this->phoneNr=$phoneNr;
                $this->cLength=$cLength;
                $this->adType=$adType;
                $this->moreInfo=$moreInfo;
            }

            public function getCName(){
                return $this->cName;
            }

            public function getEmail(){
                return $this->email;
            }

            public function getPhoneNr(){
                return $this->phoneNr;
            }

            public function getClength(){
                return $this->cLength;
            }

            public function getAdType(){
                return $this->adType;
            }

            public function getMoreInfo(){
                return $this->moreInfo;
            }
    }