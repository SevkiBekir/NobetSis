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

/**
 * Class main
 */
class userOperations extends CI_Controller {

    /**
     *
     */
    public function index(){

        $userTypes = session("userTypes");

        // Admin control
        if($userTypes["degree"] != 3)
            redirect("main");

        $username = session("username");
        $this->load->model('users');

        if($getAllUsers = $this->users->getAllUsers()){
            $dummyArray=[];
            $i=0;
            foreach ($getAllUsers as $row){
                $dummyArray['a'.$i]=array(
                    'firstname' => $row->firstname,
                    'lastname' => $row->lastname,
                    'username' => $row->username,
                    'userTypeName' => $row->userTypeName,

                );
                $i++;

                // Kendi yetkisini değiştirirse session update
                if($username == $row->username && $userTypes["degree"] != $row->authorizationDegree){
                    redirect("logout");
                }
            }
            $data["users"] = $dummyArray;
        }else
            redirect('main');


        loadView("userOperations",$data);
        loadView("footer");

    }



     function show($link = NULL){
         $userTypes = session("userTypes");

         // Admin control
         if($userTypes["degree"] != 3)
             redirect("main");

         if($link == NULL)
             redirect("admin/userOperations");

         $this->load->model('users');

         if($getUserInfo = $this->users->getUserInfoWithTypes($link)){

             $userTypeLink = $this -> users -> generateLinkAndSave($getUserInfo->userTypeName,$getUserInfo->userTypeId);

             $user = array(
                 "firstname" => $getUserInfo->firstname,
                 "lastname" => $getUserInfo->lastname,
                 "username" => $getUserInfo->username,
                 "userTypeName" => $getUserInfo->userTypeName,
                 "userTypeLink" => $userTypeLink,

             );
             $data["user"] = $user;
         }else
             redirect("admin/userOperations");


         if($getAllUserType = $this->users->getAllUserType()){
             $dummyArray=[];
             $i=0;
             foreach ($getAllUserType as $row){
                 $userTypeLink = $this -> users -> generateLinkAndSave($row->name,$row->id);
                 $dummyArray['a'.$i]=array(
                     'name' => $row->name,
                     'link' => $userTypeLink,
                 );
                 $i++;
             }
             $data["allUserTypes"] = $dummyArray;
         }

         loadView("userOperations_Show",$data);
         loadView("footer");
     }

     function change(){
         $this->load->model('users');
         $this->load->library('form_validation');
         $this->form_validation->set_rules('chbUserTypes', '', 'trim|required|alpha_numeric');
         $this->form_validation->set_rules('username', '', 'trim|required|alpha_numeric');
         if($this->form_validation->run() == FALSE) {
             redirect("admin/userOperations");
         }

         $userTypeLink = post("chbUserTypes");
         $username = post("username");

         if($userTypeId = $this->users->getUserTypeLink(NULL,$userTypeLink)->userTypeId){
             $this->users->userTypeId = $userTypeId;
             $this->users->username = $username;
             $this->users->updateUserType();
             if($result = $this->users->updateUserType()){
                 redirect("admin/userOperations");
             }else
                 redirect("admin/userOperations");

         }else
             redirect("admin/userOperations");




     }
}

