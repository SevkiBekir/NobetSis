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

class register extends CI_Controller {

	public function index(){
		$this->load->model('users');
        $this->load->library('form_validation');


        // DB'de olup olmadığını kontrol ediyor.
        //TRUE-> Kayıt yap
        //FALSE->User var, Giriş yap.

        $this->form_validation->set_rules('txbPassword1', 'Şifre', 'trim|required');
        $this->form_validation->set_rules('txbPassword2', 'Şifre (Yeniden)', 'trim|required|matches[txbPassword1]');
        $this->form_validation->set_rules('txbFName', 'İsim', 'trim|required');
        $this->form_validation->set_rules('txbLName', 'Soyisim', 'trim|required');
        $this->form_validation->set_rules('txbUsername', 'Kullanıcı Adı', 'trim|required');

        if($this->form_validation->run() == FALSE)
            loadView('register');


        $pass1 = post('txbPassword1');
        $pass2 = post('txbPassword2');
        $txbFName = post('txbFName');
        $txbLName = post('txbLName');
        $txbUsername = post('txbUsername');



        // Is Empty Control
        if (isset($pass1,$pass2,$txbFName,$txbLName,$txbUsername)){

            // Pass Control
            if($pass1 === $pass2){
                $result = $this->users->register($pass1,$txbFName,$txbLName,$txbUsername);
                if($result){
                    //Registration Successful
                    headerLocation("login");
                }else{
                    //Registration Fail
                    loadView('register');
                }

            }else{
                // Does not match pass
                //echo "Pass match error";
                loadView('register');
            }

        }else{
            // Field(s) is/are empty!
            loadView('register');
        }

	}
}
