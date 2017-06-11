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
class main extends CI_Controller {

    /**
     *
     */
    public function index(){


        $this->load->model('users');
        $this->load->model('announcements');

        $username = session("username");
        if(!isset($username))
            redirect("login");


        $userTypes = session("userTypes");
        new dBug( $userTypes);

        if($getAllAnnouncements = $this->announcements->getAllAnnouncements()){
            $dummyArray=[];
            $i=0;
            foreach ($getAllAnnouncements as $row){
                $dummyArray['a'.$i]=array(
                    'name' => $row->name,

                );
                $i++;
            }

            $data["announcements"] = $dummyArray;

        }else{

            // Boş git...
            $dummyArray=[];
            $data["announcements"] = $dummyArray;
        }


        loadView("main",$data);
        loadView("footer");
    }
}

