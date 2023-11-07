<?php
class AdoptAPet extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Adoptions/Adopt-A-Pet');
    }
}
