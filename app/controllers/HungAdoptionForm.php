<?php
class HungAdoptionForm extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Adoptions/HungAdoption-Form');
    }
}
