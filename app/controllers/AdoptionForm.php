<?php
class AdoptionForm extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Adoptions/Adoption-Form');
    }
}
