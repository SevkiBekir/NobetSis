<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */

class weeklywatches extends BaseModel {

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
    public $weekNo;
    public $operId;
    public $year;




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
    function getAllRowsWithWeekNo(){
        $table="weeklyWatches ww";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('do.id,do.name, ww.monday, ww.tuesday, ww.wednesday, ww.thursday, ww.friday, ww.saturday, ww.sunday, ww.weekNo, ww.year')
            ->from($table);

        $this->db->join($schemeVar.".dormitories do","do.id=ww.dormitoryId");
        $this->db->where(array('weekNo' => $this->weekNo,'year' => $this->year));

        $query=$this->db->get();

        $row=$query->result();

        if ($row)
            return $row;

        return false;
    }

    function insertWeeklyWatchesFromTermWatches($row = NULL){

        if(isset($row)){

            $this->dormitoryId = $row->id;
            $this->monday = $row->monday;
            $this->tuesday = $row->tuesday;
            $this->wednesday = $row->wednesday;
            $this->thursday = $row->thursday;
            $this->friday = $row->friday;
            $this->saturday = $row->saturday;
            $this->sunday = $row->sunday;
            if($this->save(array("year" => $this->year,"weekNo" => $this->weekNo, "dormitoryId" => $this->dormitoryId, "monday" => $this->monday,"tuesday" => $this->tuesday,"wednesday" => $this->wednesday,"thursday" => $this->thursday,"friday" => $this->friday,"saturday" => $this->saturday,"sunday" => $this->sunday))){
                /// Registration is successful
                return true;
            }

        }
        return false;


    }

    function getInfoByDormitoryIdSpecialDayWeekYear($day = NULL){
        if(!isset($day))
            return false;

        $table="weeklyWatches ww";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('do.id,do.name, ww.weekNo, ww.year, ww.'.$day)
            ->from($table);

        $this->db->join($schemeVar.".dormitories do","do.id=ww.dormitoryId");
        $this->db->where(array('weekNo' => $this->weekNo,'year' => $this->year,'dormitoryId' => $this->dormitoryId));

        $query=$this->db->get();

        $row=$query->result();

        if ($row)
            return $row[0];

        return false;
    }

    function updateWeeklyWatches($day = NULL){

        if(!isset($day))
            return false;

        if($this->update(
            array(
                $day => $this->$day,
            ),
            array(
                "dormitoryId" => $this->dormitoryId,
                "weekNo" => $this->weekNo,
                "year" => $this->year,

            )
        )){
            /// Registration is successful
            return true;
        }
        return false;
    }




}


                
                