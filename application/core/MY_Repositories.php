<?php

class MY_Repositories extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        log_message('info', 'Respositories Class Initialized');
    }
}