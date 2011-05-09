<?php
class Pages extends CI_Controller
{
    function _construct()
    {
        parent::_construct();
    }
    
    function index()
    {
        echo 'This is the homepage!';
    }
}
?>
