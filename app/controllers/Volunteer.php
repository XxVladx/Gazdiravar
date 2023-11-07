<?php
class Volunteer extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Volunteer/volunteer');
    }
}
