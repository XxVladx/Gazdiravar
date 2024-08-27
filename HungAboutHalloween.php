<?php
require_once __DIR__ . '/app/config/config.php'; 
include_once __DIR__ . '/app/views/All-Tips/Hung-About-Halloween.php'; 
require_once __DIR__ . '/app/core/Controller.php';  
class HungAboutHalloween extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('All-Tips/Hung-About-Halloween');
    }
}
