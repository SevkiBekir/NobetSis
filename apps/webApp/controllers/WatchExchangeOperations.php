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
class watchExchangeOperations extends CI_Controller
{

    /**
     *
     */
    public function index()
    {

        // getAllLabWatchSettings
        $username = session("username");
        if(!isset($username))
            redirect("login");


        $this->load->model('labWatchSettings');

        if ($getAllLabWatchSettings = $this->labWatchSettings->getAllLabWatchSettings()) {
            $dummyArray = [];
            $i = 0;
            foreach ($getAllLabWatchSettings as $row) {
                $dummyArray[] = array(
                    'dormitoryName' => $row->name,
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
        }

        $data["labWatchSettings"] = $dummyArray;


        //getOperators

        $this->load->model('users');

        if ($getAllOperators = $this->users->getAllOperators()) {
            $dummyArray = [];
            $i = 0;
            foreach ($getAllOperators as $row) {

                $dummyArray[] = array(
                    'firstname' => $row->firstname,
                    'lastname' => $row->lastname,
                    'username' => $row->username,
                );
                $i++;
            }
            $data["operators"] = $dummyArray;
        } else {
            // There is no operators in the system.

            redirect("main");
        }




        // Weekly Watches

        $this->load->model('weeklywatches');
        date_default_timezone_set('Europe/Istanbul');
        $this->load->helper('date');

        $datestring = '%W';
        $time = time();
        $weekNo = mdate($datestring, $time);

        $datestring = "%Y";
        $year = mdate($datestring, $time);

        $this->weeklywatches->weekNo = $weekNo;
        $this->weeklywatches->year = $year;

        if(!($getAllWeeklyWatches = $this->weeklywatches->getAllRowsWithWeekNo())){
            // O hafta ile ilgili kayıt yoksa weeklyWatches dbsine dönem nöbetleri kayıdını kopyalarayak ekle.
            $this->load->model('assignOperToLab');
            if($getAllAssigns = $this->assignOperToLab->getAllAssigns()){
                foreach ($getAllAssigns as  $row) {
                    if(!($this->weeklywatches->insertWeeklyWatchesFromTermWatches($row))){
                        redirect("main");
                    }
                }


            }

        }

        // kayıt var. Şimdi güncel nöbetleri çek
        $getAllWeeklyWatches = $this->weeklywatches->getAllRowsWithWeekNo();
        // According to operator, get weekly info

        $dummyArray = [];
        foreach ($getAllWeeklyWatches as $row) {

            $dummyArray[] = array(
                'weekNo' => $row->weekNo,
                'year' => $row->year,
                'dormitoryId' => $row->id,
                'dormitoryName' => $row->name,
                'monday' => explode("-", $row->monday),
                'tuesday' => explode("-", $row->tuesday),
                'wednesday' => explode("-", $row->wednesday),
                'thursday' => explode("-", $row->thursday),
                'friday' => explode("-", $row->friday),
                'saturday' => explode("-", $row->saturday),
                'sunday' => explode("-", $row->sunday),

            );

        }
        //new dBug($dummyArray);
        // match username with allAssign
        $allAssigns = [];
        foreach ($dummyArray as $row) {
            for ($i = 0; $i < 5; $i++) {
                if ($row["monday"][$i] != "0") {
                    foreach ($data["operators"] as $oper) {
                        if ($oper["username"] == $row["monday"][$i]) {
                            $row["monday"][$i] = $oper;
                            break;
                        }
                    }
                }
                if ($row["tuesday"][$i] != "0") {
                    foreach ($data["operators"] as $oper) {
                        if ($oper["username"] == $row["tuesday"][$i]) {
                            $row["tuesday"][$i] = $oper;
                            break;
                        }
                    }
                }
                if ($row["wednesday"][$i] != "0") {
                    foreach ($data["operators"] as $oper) {
                        if ($oper["username"] == $row["wednesday"][$i]) {
                            $row["wednesday"][$i] = $oper;
                            break;
                        }
                    }
                }
                if ($row["thursday"][$i] != "0") {
                    foreach ($data["operators"] as $oper) {
                        if ($oper["username"] == $row["thursday"][$i]) {
                            $row["thursday"][$i] = $oper;
                            break;
                        }
                    }
                }
                if ($row["friday"][$i] != "0") {
                    foreach ($data["operators"] as $oper) {
                        if ($oper["username"] == $row["friday"][$i]) {
                            $row["friday"][$i] = $oper;
                            break;
                        }
                    }
                }
                if ($row["saturday"][$i] != "0") {
                    foreach ($data["operators"] as $oper) {
                        if ($oper["username"] == $row["saturday"][$i]) {
                            $row["saturday"][$i] = $oper;
                            break;
                        }
                    }
                }
                if ($row["sunday"][$i] != "0") {
                    foreach ($data["operators"] as $oper) {
                        if ($oper["username"] == $row["sunday"][$i]) {
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
        loadView("watchExchangeOperations",$data);
        loadView("footer");


    }

    function add(){
        // check user login
        $username = session("username");
        if(!isset($username))
            redirect("login");


        $this->load->library('form_validation');
        date_default_timezone_set('Europe/Istanbul');
        $this->load->helper('date');

        $this->form_validation->set_rules('add', '', 'trim|required|alpha_dash');


        if($this->form_validation->run() == FALSE){
            redirect("watchExchangeOperations");
        }

        $temp = post("add");

        $result = explode("_",$temp);

        //array control
        if(sizeof($result) != 6)
            redirect("watchExchangeOperations");



        $dormitoryId = (int)$result[1];
        $day = $result[2];
        $hourIndex = (int)$result[3];
        $weekNo = (int)$result[4];
        $year = (int)$result[5];

        $day = strtolower($day);


        $days = array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");


        //day kontrol
        if(!in_array($day,$days)){
            redirect("watchExchangeOperations");
        }


        //year kontrol
        $years = [];
        $todayYear = 2017;
        for ($i = 0;$i<11;$i++){
            $years[] = $todayYear + $i;
        }

        if(!in_array($year,$years)){
            redirect("watchExchangeOperations");
        }



        //ilgili yurt, gün, hafta ve yıla ait olan kayıtı getir. Sonra onu parse et ve saate ulaş. Değişiklik yapıp
        // update fonksiyonuna gönder.

        $this->load->model('weeklywatches');
        $this->weeklywatches->weekNo = $weekNo;
        $this->weeklywatches->year = $year;
        $this->weeklywatches->dormitoryId = $dormitoryId;

        if($getInfo = $this->weeklywatches->getInfoByDormitoryIdSpecialDayWeekYear($day)){
            //new dBug($getInfo);

            $dayInfo = $getInfo->$day;

            $dayInfo = explode("-",$dayInfo);
            //new dBug($dayInfo);

            // nöbeti sil şimdi
            $dayInfo[$hourIndex] = $username;

            //birleştir

            $dayInfo = implode("-",$dayInfo);
            //new dBug($dayInfo);

            // update db
            $this->weeklywatches->$day = $dayInfo;
            //new dBug(array($this->weeklywatches,$day));


            $this->load->model('addWatches');
            $this->load->model("users");
            $this->addWatches->watchInfo = $day. "-". $hourIndex;
            $this->addWatches->weekNo = $weekNo;
            $userId = $this->users->getId($username);
            $this->addWatches->operId = $userId;
            $this->addWatches->dormitoryId = $dormitoryId;
            $this->addWatches->year = $year;


            if($this->weeklywatches->updateWeeklyWatches($day)){
                if($this->addWatches->insertADdWatches())
                    redirect("watchExchangeOperations");
            }else
                redirect("watchExchangeOperations");

        }




    }



}

