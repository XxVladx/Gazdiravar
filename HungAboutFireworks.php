<?php
require_once __DIR__ . '/app/config/config.php'; 
include_once __DIR__ . '/app/views/All-Tips/Hung-About-Fireworks.php'; 
require_once __DIR__ . '/app/core/Controller.php'; 
class HungAboutFireworks extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('All-Tips/Hung-About-Fireworks');
    }
}
