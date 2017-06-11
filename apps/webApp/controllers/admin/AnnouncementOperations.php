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
class announcementOperations extends CI_Controller {

    /**
     *
     */
    public function index(){

        $userTypes = session("userTypes");

        // Admin control
        if($userTypes["degree"] != 3)
            redirect("main");


        $this->load->model('announcements');
        $this->load->library('form_validation');



        if($getAllAnnouncements = $this->announcements->getAllAnnouncements()){
            $dummyArray=[];
            $i=0;
            foreach ($getAllAnnouncements as $row){
                $dummyArray['a'.$i]=array(
                    'name' => $row->name,
                    'hash' => $row->hash,

                );
                $i++;
            }

            $data["announcements"] = $dummyArray;

        }else{

            // Boş git...
            $dummyArray=[];
            $data["announcements"] = $dummyArray;
        }


        loadView("announcementOperations",$data);
        loadView("footer");
    }

     public function add(){
        $this->load->model('announcements');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txbDuyuruEkle', 'Duyuru Ekle', 'trim|required');


        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            // Eklemek için uygun.
            $name = post("txbDuyuruEkle");
            $this->announcements->name = $name;
            if($result = $this->announcements->insertAnnouncement()){
                redirect("admin/announcementOperations");
            }else
                echo "fail!";

        }
    }

    function delete(){
        $this->load->model('announcements');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('announcement', '', 'trim|required');


        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $hash = post("announcement");
            $this->announcements->hash = $hash;
            if($result = $this->announcements->deleteAnnouncement())
                redirect("admin/announcementOperations");
            else
                $this->index();
        }
    }
}

