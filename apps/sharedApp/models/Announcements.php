<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */

class announcements extends BaseModel {

    /**
     * Columns of table users
     */
    public $id;
    public $name;
    public $hash;
    public $keyValue;

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
    function getAllAnnouncements(){
        $table="announcements a";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('*')
            ->from($table);

        $query=$this->db->get();

        $row=$query->result();

        if ($row)
            return $row;

        return false;
    }



     /**
     * Register
     */
    function insertAnnouncement(){
        $keyValue = uniqid("", true);
        $hash = hash_hmac('sha256', $this->name, $keyValue);

        if($this->save(array("name" => $this->name, "hash" => $hash, "keyValue" => $keyValue))){
            /// Registration is successful
            return true;
        }
        return false;


    }

    function deleteAnnouncement(){
        if($this->delete(array("hash" => $this->hash))){
            /// Registration is successful
            return true;
        }
        return false;
    }








}


                
                