<?php
class OurFavoritePosts extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Fun-Stuff/Our-Favorite-Posts');
    }
}
