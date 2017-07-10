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
class quitWatchOperations extends CI_Controller
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

        // kayıt var. Şimdi nöbet bırakma işlemlerini yap.

        //Get Day of Name With Special Week



        $dateOfWeek = getDayNameOfSpecialWeek($weekNo,$year);
        //new dBug($dateOfWeek);
        $data["dateOfWeek"] = $dateOfWeek;

        // According to operator, get weekly info

        $dummyArray = [];
        foreach ($getAllWeeklyWatches as $row) {

            $dummyArray[] = array(
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

        $operatorLabs = [];

        foreach ($dummyArray as $row){
            $temp = [];
            $temp["dormitoryId"] = $row["dormitoryId"];
            $temp["dormitoryName"] = $row["dormitoryName"];
            for ($i = 0; $i < 5; $i++) {

                // Hours
                if($i == 0){
                   $hours = "09:00 - 13:00";
                }else if($i == 1){
                    $hours = "13:00 - 17:00";
                }else if($i == 2){
                    $hours = "17:00 - 21:00";
                }else if($i == 3){
                    $hours = "21:00 - 01:00";
                }else if($i == 4){
                    $hours = "01:00 - 06:00";
                }


                //filter

                if ($row["monday"][$i] == $username) {
                    $temp["monday"][$i] = array($hours,$dateOfWeek[0]);
                }
                if ($row["tuesday"][$i] == $username) {
                    $temp["tuesday"][$i] = array($hours,$dateOfWeek[1]);

                }
                if ($row["wednesday"][$i] == $username) {
                    $temp["wednesday"][$i] = array($hours,$dateOfWeek[2]);

                }
                if ($row["thursday"][$i] == $username) {
                    $temp["thursday"][$i] = array($hours,$dateOfWeek[3]);

                }
                if ($row["friday"][$i] == $username) {
                    $temp["friday"][$i] = array($hours,$dateOfWeek[4]);
                }
                if ($row["saturday"][$i] == $username) {
                    $temp["saturday"][$i] = array($hours,$dateOfWeek[5]);
                }
                if ($row["sunday"][$i] == $username) {
                    $temp["sunday"][$i] = array($hours,$dateOfWeek[6]);
                }

            }

            $operatorLabs[] = $temp;

        }

        $data["operatorLabs"]=$operatorLabs;





        //new dBug($data);
        loadView("quitWatchOperations",$data);
        loadView("footer");


    }

    function delete(){
        // check user login
        $username = session("username");
        if(!isset($username))
            redirect("login");


        $this->load->library('form_validation');
        date_default_timezone_set('Europe/Istanbul');
        $this->load->helper('date');

        $this->form_validation->set_rules('temp', '', 'trim|required|alpha_dash');


        if($this->form_validation->run() == FALSE){
            redirect("quitWatchOperations");
        }

        $temp = post("temp");

        $result = explode("_",$temp,4);
        $dormitoryId = (int)$result[1];
        $date = $result[2];
        $formattedHour = $result[3];

        $hourIndex = getStringHourToInt($formattedHour);
//        new dBug(array($dormitoryId,$hourIndex,$date));

        $timestamp = strtotime($date);
        $day = date('l', $timestamp);
        $day = strtolower($day);

        $days = array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");


        //day kontrol
        if(!in_array($day,$days)){
            redirect("quitWatchOperations");
        }


        $date = new DateTime($date);
        $weekNo = (int) $date->format("W");
        $year = (int)$date->format("Y");

//        new dBug(array($weekNo,$year,$day));


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
            $dayInfo[$hourIndex] = "0";

            //birleştir

            $dayInfo = implode("-",$dayInfo);
            //new dBug($dayInfo);

            // update db
            $this->weeklywatches->$day = $dayInfo;
            //new dBug(array($this->weeklywatches,$day));


            $this->load->model('quitWatches');
            $this->load->model("users");
            $this->quitWatches->watchInfo = $day. "-". $hourIndex;
            $this->quitWatches->weekNo = $weekNo;
            $userId = $this->users->getId($username);
            $this->quitWatches->operId = $userId;
            $this->quitWatches->dormitoryId = $dormitoryId;
            $this->quitWatches->year = $year;


            if($this->weeklywatches->updateWeeklyWatches($day)){
                if($this->quitWatches->insertQuitWatches())
                    redirect("quitWatchOperations");
            }else
                redirect("quitWatchOperations");

        }


    }



}

