<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */

class punishments extends BaseModel {

    /**
     * Columns of table users
     */
    public $id;
    public $givenBy;
    public $operId;
    public $description;

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
    function getAllPunishments(){
        $table="punishments p";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('COUNT(operId) as punish, operId')
            ->from($table);
        $this->db->group_by("operId");
        $this->db->order_by('punish DESC');
        $query=$this->db->get();

        $row=$query->result();
        if ($row)
            return $row;
        return false;
    }



     /**
     * Register
     */
    function insertPunishment(){


        if($this->save(array("description" => $this->description,"givenBy" => $this->givenBy, "operId" => $this->operId))){
            /// Registration is successful
            return true;
        }
        return false;


    }









}


                
                