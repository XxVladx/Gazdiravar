<?php
class HungDonate extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Donate/hungdonate');
    }
}
