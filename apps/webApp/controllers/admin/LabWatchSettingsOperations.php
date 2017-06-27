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
class labWatchSettingsOperations extends CI_Controller
{

    /**
     *
     */
    public function index()
    {

        $userTypes = session("userTypes");

        // Admin control
        if ($userTypes["degree"] != 3)
            redirect("main");

        $this->load->model('labWatchSettings');

        if($getAllLabWatchSettings = $this->labWatchSettings->getAllLabWatchSettings()){
            $dummyArray=[];
            $i=0;
            foreach ($getAllLabWatchSettings as $row){
                $dummyArray['a'.$i]=array(
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
            $data["labSettingsJs"] = TRUE;

            //new dBug($data);
            loadView("labWatchSettingsOperations",$data);
            loadView("footer");

        }else
            redirect("main");



    }

    public function save(){
        $userTypes = session("userTypes");

            // Admin control
        if ($userTypes["degree"] != 3)
        redirect("main");

        $this->load->library('form_validation');
        $this->load->model('labWatchSettings');

        // Form_Validation

        if($getAllLabWatchSettings = $this->labWatchSettings->getAllLabWatchSettings()) {

            $dummyArray = [];
            $i = 0;
            foreach ($getAllLabWatchSettings as $row) {
                $prepName=prepareNameLink($row->name);
                $prepName = url_title($prepName,"_");
                $dummyArray['a' . $i] = array(
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
                                $this->form_validation->set_rules($itemName, '', 'required|trim|numeric');

                            }


                    }
                }
            }

            if($this->form_validation->run() == FALSE) {
                redirect("admin/labWatchSettingsOperations");
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
                                $data[$row["dormitoryId"]][$days[$j]][$i] = 1;
                            }
                    }
                }
            }

//            new dBug($data);

            // Merge Hours
            foreach ($dummyArray as $row) {
                foreach ($days as $day){
                    for ($i=1;$i<=5;$i++) {
                        if($i == 1)
                            $newData[$row["dormitoryId"]][$day] = $data[$row["dormitoryId"]][$day][$i];
                        else{
                            $newData[$row["dormitoryId"]][$day] .= "-";
                            $newData[$row["dormitoryId"]][$day] .= $data[$row["dormitoryId"]][$day][$i];
                        }
                    }
                }
            }

            //new dBug($newData);

            // Save it pay-by-pay
            $keys = array_keys($newData);
            for ($i = 1; $i<=sizeof($newData);$i++){
                $this->labWatchSettings->dormitoryId = $keys[$i-1];
                $this->labWatchSettings->monday = $newData[$i]["mo"];
                $this->labWatchSettings->tuesday = $newData[$i]["tu"];
                $this->labWatchSettings->wednesday = $newData[$i]["we"];
                $this->labWatchSettings->thursday = $newData[$i]["th"];
                $this->labWatchSettings->friday = $newData[$i]["fr"];
                $this->labWatchSettings->saturday = $newData[$i]["sa"];
                $this->labWatchSettings->sunday = $newData[$i]["su"];


                $this->labWatchSettings->updateLabSettings();


            }

            redirect("admin/labWatchSettingsOperations");


        }else
            redirect("admin/labWatchSettingsOperations");



    }

}

