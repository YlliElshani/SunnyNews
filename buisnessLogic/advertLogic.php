<?php

    include_once 'advertClass.php';
    include_once 'advertMapper.php';

    if (isset($_POST['submitBtn'])) {
        $advert=new AdvertLogic($_POST);
        var_dump($advert);
        $advert->insertData();
    }

    class AdvertLogic{

        private $cName;
        private $email;
        private $phoneNr;
        private $cLength;
        private $adType;
        private $moreInfo;

            public function __construct($formData)
            {
                $this->cName=$formData['cName'];
                $this->email=$formData['email'];
                $this->phoneNr=$formData['phoneNr'];
                $this->cLength=$formData['cLength'];
                $this->adType=$formData['adType'];
                $this->moreInfo=$formData['moreInfo'];
            }

            public function insertData(){
                $advert=new Advert($this->cName,$this->email,$this->phoneNr,$this->cLength,$this->adType,$this->moreInfo);
                $mapper=new AdvertMapper();
                $mapper->insertAdvert($advert);
                sleep(2);
                header("Location:../HTMLfiles/Advertisment.php?success=FormSent");
            }

    }