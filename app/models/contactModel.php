<?php
    class contactModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function createContactPost($data) {
            $this->db->query("INSERT INTO contact (Firstname, Lastname, Email, Message, Image) VALUES (:fname, :lname,
                :email, :message, null)");
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':lname', $data['lname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':message', $data['message']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }