<?php
require_once __DIR__ . '/app/config/config.php'; 
include_once __DIR__ . '/app/views/includes/hungheader.php';
include_once __DIR__ . '/app/views/Home/hung-home.php';
require_once __DIR__ . '/app/core/Controller.php'; 
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
