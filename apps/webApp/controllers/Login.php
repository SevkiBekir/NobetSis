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

class login extends CI_Controller {

	public function index(){
        //echo "login page";
        $this->load->model('users');
        $this->load->library('form_validation');
        $this->load->library('user_agent');

        //new dBug($this->agent->referrer());

        $this->form_validation->set_rules('txbPassword', 'Şifre', 'trim|required');
        $this->form_validation->set_rules('txbUsername', 'Kullanıcı Adı', 'trim|required');

        if($this->form_validation->run() == FALSE)
            loadView('login');

        $pass = post('txbPassword');
        $txbUsername = post('txbUsername');

         $userInfo = $this->users->getUserInfo($txbUsername);

         if($userInfo){
            //echo "selam";
             //new dBug($userInfo);
             $this->users->hash = $userInfo->hash;
             $this->users->keyValue = $userInfo->keyValue;
             $this->users->password = $pass;
             //new dBug($this);
             if($this->users->loginCheck()){
                 $this->users->username = $userInfo->username;
                 $this->users->firstname = $userInfo->firstname;
                 $this->users->lastname = $userInfo->lastname;
                 $this->users->id = $userInfo->id;
                 $this->users->createdDate = $userInfo->createdDate;

                 if($userType = $this->users->getUserType($userInfo->userTypeId)){
                     $data = array("name" => $userType->name,"degree" => $userType->authorizationDegree);
                 }

                 session('username', $this->users->username);
                 session('userFName', $this->users->firstname);
                 session('userLName', $this->users->lastname);
                 session("userTypes",$data);

                 $ref = $this->agent->referrer();
                 if(isset($ref))
                    redirect($this->agent->referrer());
                 else
                     redirect("main");


             }else{
                 $this->users->hash = "";
                 $this->users->keyValue = "";
                 $this->users->password = "";
                 loadView("login");
             }



         }else
             //echo "sıkıntı";
             loadView("login");

    }
}
