<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */

class quitWatches extends BaseModel {

    /**
     * Columns of table users
     */
    public $id;
    public $dormitoryId;
    public $weekNo;
    public $operId;
    public $year;
    public $watchInfo;




    /**
     * users constructor.
     */
    public function __construct(){
        // Call the CI_Model constructor
        parent::__construct();
    }


    /**
     * @param $username
     * @return bool
     */


    function insertQuitWatches(){
        if($this->save(array("year" => $this->year,"weekNo" => $this->weekNo, "dormitoryId" => $this->dormitoryId, "watchInfo" => $this->watchInfo,"operId" => $this->operId))){
            /// Registration is successful
            return true;
        }
        return false;


    }





}


                
                