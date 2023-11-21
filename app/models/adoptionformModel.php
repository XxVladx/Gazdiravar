<?php
    class adoptionformModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function createAdoptPost($data) {
            $this->db->query("INSERT INTO adoption (first_name, last_name, email, phone, address, pet, reason) VALUES (:fname, :lname,
                :email, :phone, :address, :pet, :reason)");
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':lname', $data['lname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phone', $data['phone']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':pet', $data['pet']);
            $this->db->bind(':reason', $data['reason']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }