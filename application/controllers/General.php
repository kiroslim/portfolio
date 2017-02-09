<?php
/**
 * Created by PhpStorm.
 * User: Kiril
 * Date: 12.11.2016 г.
 * Time: 11:53 ч.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

    public function index()
    {


        $parse = array(
            'page'      => 'home',
            'title'     => 'Homepage title'
        );

        $this->load->view('index', $parse);
    }
}
