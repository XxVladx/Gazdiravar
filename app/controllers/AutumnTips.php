<?php
class AutumnTips extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('All-Tips/Autumn-Tips');
    }
}