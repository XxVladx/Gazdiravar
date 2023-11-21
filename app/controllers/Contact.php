<?php
class Contact extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if (!empty($_POST)) {
            $this->addContactInfo();
        }
        $this->view('Contact/contact');
    }
    
    public function addContactInfo()
    {
        $ContactModel = $this->model('contactModel');
        $error = false;

        if ($error)
        {
            $this->view('Contact/contact');
        }
        else
        {
            $data=[
                'fname' => trim($_POST['fname']),
                'lname' => trim($_POST['lname']),
                'email' => trim($_POST['eaddress']),
                'message' => trim($_POST['message']),
            ];
            if($ContactModel->createContactPost($data))
            {
                echo "Sent/Küldött";
            }
            else {
                echo "Failed to send/Nem sikerült elküldeni";
            }
        }
    }
}
