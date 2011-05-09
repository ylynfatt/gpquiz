<?php
class Home extends Controller
{
    function Home()
    {
        parent::Controller();
    }
    
    function index()
    {
        echo 'This is the homepage!';
    }
}
?>