<?php
class AnimalDetails extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Adoptions/Animal-Details');
    }
}
