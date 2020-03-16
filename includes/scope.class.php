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
        }

        public function getName() {
            return $this->studentName;
        }

        public function getCourse() {
            return $this->courseName;
        }

        public function getMentor() {
            return self::MENTOR;
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
            echo "&nbsp&nbsp&nbspI'm ".$this->studentName.". Batch ".$this->batch." of BoomCamp Training in Boomsourcing, Inc. currently enrolled in ".$this->courseName." course together with our lead mentor, " .self::MENTOR.
            ".<br /><br />&nbsp&nbsp&nbsp&nbsp&nbspYou can contact me with this email: ".$this->email."<br />or my work number: " .$this->contact." at this working hours: ".$this->officeHrs.".";
        }
    }