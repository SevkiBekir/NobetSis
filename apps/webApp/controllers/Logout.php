<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {

	// Logout Function
	public function index(){
        
		$this->session->sess_destroy();
        headerLocation();

    }
}
