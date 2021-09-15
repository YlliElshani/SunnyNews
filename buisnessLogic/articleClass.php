<?php

    class Article{
        

        private $id;
        private $headline;
        private $content;
        private $journalist;

            public function __construct($headline,$content,$journalist)
            {
                $this->headline=$headline;
                $this->content=$content;
                $this->journalist=$journalist;
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


    }