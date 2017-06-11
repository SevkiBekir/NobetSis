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
class punishmentOperations extends CI_Controller {

    /**
     *
     */
    public function index(){

        $userTypes = session("userTypes");

        // Admin control
        if($userTypes["degree"] == 1)
            redirect("main");



        $this->load->model('punishments');
        $this->load->model('users');

        $this->load->library('form_validation');



        if($getAllPunishments = $this->punishments->getAllPunishments()){
            $dummyArray=[];
            $i=0;
            foreach ($getAllPunishments as $row){
                $userInfo = $this->users->getFirstLastName($row->operId);

                $dummyArray['a'.$i]=array(
                    'firstname' => $userInfo->firstname,
                    'lastname' => $userInfo->lastname,
                    'punishCount' => $row->punish,


                );
                $i++;
            }

            $data["punishments"] = $dummyArray;

        }else{

            // Boş git...
            $dummyArray=[];
            $data["punishments"] = $dummyArray;
        }


        if($getAllOperators = $this->users->getAllOperators()){
            $dummyArray=[];
            $i=0;
            foreach ($getAllOperators as $row){

                $dummyArray['a'.$i]=array(
                    'firstname' => $row->firstname,
                    'lastname' => $row->lastname,
                    'username' => $row->username,
                );
                $i++;
            }
            $data["operators"] = $dummyArray;
        }else{
            // Boş git...
            $dummyArray=[];
            $data["operators"] = $dummyArray;
        }


        loadView("punishmentOperations",$data);
        loadView("footer");
    }

     public function add(){
        $this->load->model('punishments');
        $this->load->model('users');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('chbOperators', '', 'trim|required');
        $this->form_validation->set_rules('txbDescription', 'Açıklama', 'trim|required');




        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            // Eklemek için uygun.
            $selectedOperatorUsername = post("chbOperators");
            $description = post("txbDescription");
            $username = session("username");
            $userId = $this->users->getId($username);
            $selectedOperId = $this->users->getId($selectedOperatorUsername);

            $this->punishments->operId = $selectedOperId;
            $this->punishments->givenBy = $userId;
            $this->punishments->description = $description;

            if($result = $this->punishments->insertPunishment()){
                redirect("moderator/punishmentOperations");
            }else
                echo "fail!";

        }
    }


}

