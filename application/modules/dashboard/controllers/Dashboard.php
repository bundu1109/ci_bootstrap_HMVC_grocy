<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Reference:
 * https://almsaeedstudio.com/themes/AdminLTE/pages/widgets.html
 */
class Dashboard extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
    }
    
    public function index(){


        $this->load->view('view_dashboard');
    }



}