<?php
class Videos extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Fun-Stuff/videos');
    }
}
