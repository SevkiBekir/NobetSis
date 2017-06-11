<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */

class users extends BaseModel {

    /**
     * Columns of table users
     */
    public $firstname;
    /**
     * @var
     */
    public $lastname;
    /**
     * @var
     */
    public $password;

    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $username;
    /**
     * @var
     */
    public $hash;
    /**
     * @var
     */
    public $keyValue;
    /**
     * @var
     */
    public $createdDate;

    public $userTypeId;


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
    function getUserInfo($username){
        $table="users u";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;
        if(isset($username)){
            if($row = $this->search(array('username' => $username))){

                //new dBug($row);

                return $row[0];
            }
        }
        return false;
    }


    /**
     * @param $hash
     * @param $keyValue
     * @param $password
     * @return bool
     */
    function loginCheck(){
        if(hash_hmac('sha256', $this->password, $this->keyValue)===$this->hash){
            return true;
        }
        return false;
    }


     /**
     * Register
     */
    function register($password, $firstName, $lastName, $username){
        //DAHA SONRA FORM VALIDATION OLACAK!

        if($this->search(array('username'=>$username))){
            //user found!
            //No register
            return false;
        }

        $keyValue = uniqid("", true);

        $hash = hash_hmac('sha256', $password, $keyValue);

        if($this->save(array("hash" => $hash, "keyValue" => $keyValue, "firstname" => $firstName, "lastname" => $lastName, "username" => $username))){

            /// Registration is successful
            return true;
        }


    }


    function getUserType($id = NULL){
        $table="userTypes uT";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;


        if(isset($id)){
            $this->db->select('*')
                ->from($table)
                ->where(array('id'=>$id));

            $query=$this->db->get();

            $row=$query->result();

            if ($row)
                return $row[0];
        }
        return false;
    }

    function getFirstLastName($id = NULL){
        $table="users u";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;


        if(isset($id)){
            $this->db->select('*')
                ->from($table)
                ->where(array('id'=>$id));

            $query=$this->db->get();

            $row=$query->result();

            if ($row)
                return $row[0];
        }
        return false;
    }

    function getAllOperators(){
        $table="users u";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('*')
            ->from($table)
            ->join($schemeVar.".userTypes ut","ut.id=u.userTypeId")
            ->where(array("ut.name" => "Kullanıcı"));



        $query=$this->db->get();


        $row=$query->result();

        if ($row)
            return $row;
        return false;

    }

    function getId($username = NULL){
        $table="users u";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;


        if(isset($username)){
            $this->db->select('*')
                ->from($table)
                ->where(array('username'=>$username));

            $query=$this->db->get();

            $row=$query->result();

            if ($row)
                return $row[0]->id;
        }
        return false;
    }







}


                
                