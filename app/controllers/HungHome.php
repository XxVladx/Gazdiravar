<?php
class HungHome extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Home/hung-home');
    }
}
