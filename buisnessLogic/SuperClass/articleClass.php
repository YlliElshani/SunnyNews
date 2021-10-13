<?php

    class Article{
        

        private $headline;
        private $content;
        private $journalist;
        private $dateAdded;
        private $timesRead;
        private $img_path;

            public function __construct($headline,$content,$journalist,$dateAdded,$timesRead,$img_path)
            {
                $this->headline=$headline;
                $this->content=$content;
                $this->journalist=$journalist;
                $this->dateAdded=$dateAdded;
                $this->timesRead=$timesRead;
                $this->img_path=$img_path;
            }

        public function getHeadline(){
            return $this->headline;
        }

        public function getContent(){
            return $this->content;
        }

        public function getJournalist(){
            return $this->journalist;
        }

        public function getDateAdded(){
            return $this->dateAdded;
        }

        public function getTimesRead(){
            return $this->timesRead;
        }

        public function getImgPath(){
            return $this->img_path;
        }

    }