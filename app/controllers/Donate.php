<?php
class Donate extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Donate/donate');
    }
}

