<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */

class assignOperToLab extends BaseModel {

    /**
     * Columns of table users
     */
    public $id;
    public $dormitoryId;
    public $monday;
    public $tuesday;
    public $wednesday;
    public $thursday;
    public $friday;
    public $saturday;
    public $sunday;
    public $userId;



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
    function getAllAssigns(){
        $table="assignOperToLab ao";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('do.id,do.name, ao.monday, ao.tuesday, ao.wednesday, ao.thursday, ao.friday, ao.saturday, ao.sunday')
            ->from($table);

        $this->db->join($schemeVar.".dormitories do","do.id=ao.dormitoryId");

        $query=$this->db->get();

        $row=$query->result();

        if ($row)
            return $row;

        return false;
    }

    function updateAssign(){
        if($this->update(
            array(
                "monday"=>$this->monday,
                "tuesday" => $this->tuesday,
                "wednesday" => $this->wednesday,
                "thursday" => $this->thursday,
                "friday" => $this->friday,
                "saturday" => $this->saturday,
                "sunday" => $this->sunday,
                "userId" => $this->userId,
            ),
            array(
                "dormitoryId" => $this->dormitoryId
            )
        )){
            /// Registration is successful
            return true;
        }
        return false;
    }

}


                
                