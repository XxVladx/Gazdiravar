<?php
class AdoptionForm extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if (!empty($_POST)) {
            $this->addAdoption();
        }
        $this->view('Adoptions/Adoption-Form');
    }

    public function addAdoption()
    {
        $AdoptModel = $this->model('adoptionformModel');
        $error = false;

        if ($error)
        {
            $this->view('Adoptions/Adoption-Form');
        }
        else
        {
            $data=[
                'fname' => trim($_POST['first_name']),
                'lname' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'pet' => trim($_POST['pet_preference']),
                'reason' => trim($_POST['reason']),
            ];
            if($AdoptModel->createAdoptPost($data))
            {
                echo "Sent/Küldött";
            }
            else {
                echo "Failed to send/Nem sikerült elküldeni";
            }
        }
    }
}
