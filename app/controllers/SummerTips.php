<?php
class SummerTips extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('All-Tips/Summer-Tips');
    }
}
