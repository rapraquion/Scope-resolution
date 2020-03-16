<?php

    class Course {
        private $courseName;
        private $studentName;
        private $batch;
        private $officeHrs;
        private $email;
        private $contact;
        const MENTOR = "Jino";

        public function __construct($courseName, $studentName) {
            $this->courseName = $courseName;
            $this->studentName = $studentName;
            self::MENTOR;
        }

        public function setBatch($batch) {
            $this->batch=$batch;
            return $this;
        }
    
        public function setOfficeHrs($officeHrs) {
            $this->officeHrs = $officeHrs;
            return $this;
        }

        public function setEmail($email) {
            $this->email = $email;
            return $this;
        }

        public function setContact($contact) {
            $this->contact = $contact;
            return $this;
        }

        public function getInfo() {
            echo "Name: ".$this->studentName."<br />Course: ".$this->courseName."<br />Mentor: " .self::MENTOR."<br />Batch: ".$this->batch.
            "<br />Email: ".$this->email."<br />Contact Number: " .$this->contact."<br />Office hours: ".$this->officeHrs;
        }
    }