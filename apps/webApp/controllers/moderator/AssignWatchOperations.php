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
class assignWatchOperations extends CI_Controller {

    /**
     *
     */
    public function index(){

        $userTypes = session("userTypes");

        // Admin control
        if($userTypes["degree"] == 1)
            redirect("main");

        $this->load->model('labWatchSettings');

        // getAllLabWatchSettings

        if($getAllLabWatchSettings = $this->labWatchSettings->getAllLabWatchSettings()){
            $dummyArray=[];
            $i=0;
            foreach ($getAllLabWatchSettings as $row){
                $dummyArray[]=array(
                    'dormitoryName' => $row->name,
                    'monday' => explode("-",$row->monday),
                    'tuesday' => explode("-",$row->tuesday),
                    'wednesday' => explode("-",$row->wednesday),
                    'thursday' => explode("-",$row->thursday),
                    'friday' => explode("-",$row->friday),
                    'saturday' => explode("-",$row->saturday),
                    'sunday' => explode("-",$row->sunday),

                );
                $i++;
            }

            $data["labWatchSettings"] = $dummyArray;

            //getOperators

            $this->load->model('users');

            if($getAllOperators = $this->users->getAllOperators()){
                $dummyArray=[];
                $i=0;
                foreach ($getAllOperators as $row){

                    $dummyArray[]=array(
                        'firstname' => $row->firstname,
                        'lastname' => $row->lastname,
                        'username' => $row->username,
                    );
                    $i++;
                }
                $data["operators"] = $dummyArray;
            }else{
                // There is no operators in the system.

                redirect("main");
            }

            //getAllAssigns

            $this->load->model('assignOperToLab');

            if($getAllAssigns = $this->assignOperToLab->getAllAssigns()) {
                $dummyArray = [];
                $i = 0;
                foreach ($getAllAssigns as $row) {

                    $dummyArray[] = array(
                        'dormitoryId' => $row->id,
                        'monday' => explode("-", $row->monday),
                        'tuesday' => explode("-", $row->tuesday),
                        'wednesday' => explode("-", $row->wednesday),
                        'thursday' => explode("-", $row->thursday),
                        'friday' => explode("-", $row->friday),
                        'saturday' => explode("-", $row->saturday),
                        'sunday' => explode("-", $row->sunday),

                    );
                    $i++;
                }



            }else{
                // There is no found for assign in the system.

                redirect("main");
            }

            // match username with allAssign
            $allAssigns = [];
           foreach ($dummyArray as $row){
                for ($i=0;$i<5;$i++){
                    if($row["monday"][$i] != "0" ){
                        foreach ($data["operators"] as $oper){
                            if($oper["username"] == $row["monday"][$i]){
                                $row["monday"][$i] = $oper;
                                break;
                            }
                        }
                    }
                    if($row["tuesday"][$i] != "0" ){
                        foreach ($data["operators"] as $oper){
                            if($oper["username"] == $row["tuesday"][$i]){
                                $row["tuesday"][$i] = $oper;
                                break;
                            }
                        }
                    }
                    if($row["wednesday"][$i] != "0" ){
                        foreach ($data["operators"] as $oper){
                            if($oper["username"] == $row["wednesday"][$i]){
                                $row["wednesday"][$i] = $oper;
                                break;
                            }
                        }
                    }
                    if($row["thursday"][$i] != "0" ){
                        foreach ($data["operators"] as $oper){
                            if($oper["username"] == $row["thursday"][$i]){
                                $row["thursday"][$i] = $oper;
                                break;
                            }
                        }
                    }
                    if($row["friday"][$i] != "0" ){
                        foreach ($data["operators"] as $oper){
                            if($oper["username"] == $row["friday"][$i]){
                                $row["friday"][$i] = $oper;
                                break;
                            }
                        }
                    }
                    if($row["saturday"][$i] != "0" ){
                        foreach ($data["operators"] as $oper){
                            if($oper["username"] == $row["saturday"][$i]){
                                $row["saturday"][$i] = $oper;
                                break;
                            }
                        }
                    }
                    if($row["sunday"][$i] != "0" ){
                        foreach ($data["operators"] as $oper){
                            if($oper["username"] == $row["sunday"][$i]){
                                $row["sunday"][$i] = $oper;
                                break;
                            }
                        }
                    }
                }
                $allAssigns[] = $row;

           }


            $data["allAssigns"] = $allAssigns;



            //new dBug($data);
            loadView("assignWatchOperations",$data);
            loadView("footer");

        }else
            redirect("main");



    }


    public function save(){
        $userTypes = session("userTypes");

        // Admin control
        if ($userTypes["degree"] == 1)
            redirect("main");

        $this->load->library('form_validation');
        $this->load->model('assignOperToLab');

        // Form_Validation

        if($getAllLabWatchSettings = $this->assignOperToLab->getAllAssigns()) {

            $dummyArray = [];
            $i = 0;
            foreach ($getAllLabWatchSettings as $row) {
                $prepName=prepareNameLink($row->name);
                $prepName = url_title($prepName,"_");
                $dummyArray[] = array(
                    'dormitoryPrepName' => $prepName,
                    'dormitoryId' => $row->id,
                );
                $i++;
            }

            //new dBug($dummyArray);

            $days = array("mo", "tu", "we", "th", "fr", "sa", "su");
            $get =  $this->input->post();
            $getKeys = array_keys($get);
            $postedData = array();
            $this->load->helper('form');
            foreach ($dummyArray as $row) {
                for ($i=1;$i<=5;$i++){
                    for ($j=0;$j<sizeof($days);$j++){
                        //1-YURT-PC-SALONU_we_2
                        $itemName = $row["dormitoryPrepName"];
                        $itemName .="_".$days[$j]."_".$i;
                        foreach ($getKeys as $item)
                            if($item == $itemName){
                                $postedData[]=$itemName;
                                $itemName = (string)$itemName;
                                $this->form_validation->set_rules($itemName, '', 'required|trim|alpha_numeric');

                            }


                    }
                }
            }

            if($this->form_validation->run() == FALSE) {
                redirect("moderator/assignWatchOperations");
            }

            // Parse Posted Data
//            new dBug($postedData);

            foreach ($dummyArray as $row) {
                for ($j=0;$j<sizeof($days);$j++){
                    for ($i=1;$i<=5;$i++){

                        //1-YURT-PC-SALONU_we_2
                        $itemName = $row["dormitoryPrepName"];
                        $itemName .="_".$days[$j]."_".$i;
                        $data[$row["dormitoryId"]][$days[$j]][$i] = 0;
                        foreach ($postedData as $item)
                            if($item == $itemName){
                                $data[$row["dormitoryId"]][$days[$j]][$i] = post($item);
                            }
                    }
                }
            }

//            new dBug($data);

            // Merge Assigns for Hour-side
            foreach ($dummyArray as $row) {
                foreach ($days as $day){
                    for ($i=1;$i<=sizeof($data[$row["dormitoryId"]][$day]);$i++) {
                        if($i == 1)
                            $newData[$row["dormitoryId"]][$day] = $data[$row["dormitoryId"]][$day][$i];
                        else{
                            $newData[$row["dormitoryId"]][$day] .= "-";
                            $newData[$row["dormitoryId"]][$day] .= $data[$row["dormitoryId"]][$day][$i];
                        }
                    }
                }
            }

//            new dBug($newData);

            // Save it pay-by-pay
            $keys = array_keys($newData);

            $this->load->model('users');

            for ($i = 1; $i<=sizeof($newData);$i++){
                $this->assignOperToLab->dormitoryId = $keys[$i-1];
                $this->assignOperToLab->monday = $newData[$i]["mo"];
                $this->assignOperToLab->tuesday = $newData[$i]["tu"];
                $this->assignOperToLab->wednesday = $newData[$i]["we"];
                $this->assignOperToLab->thursday = $newData[$i]["th"];
                $this->assignOperToLab->friday = $newData[$i]["fr"];
                $this->assignOperToLab->saturday = $newData[$i]["sa"];
                $this->assignOperToLab->sunday = $newData[$i]["su"];
                $this->assignOperToLab->userId = $this->users->getId(session("username"));

                $this->assignOperToLab->updateAssign();


            }

            redirect("moderator/assignWatchOperations");


        }else
            redirect("moderator/assignWatchOperations");



    }



}

