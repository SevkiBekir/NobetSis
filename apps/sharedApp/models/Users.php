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


    function getAllUsers(){
        $table="users u";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('*,ut.name as userTypeName')
            ->from($table)
            ->join($schemeVar.".userTypes ut","ut.id=u.userTypeId");

        $this->db->order_by("authorizationDegree DESC");

        $query=$this->db->get();


        $row=$query->result();

        if ($row)
            return $row;
        return false;

    }

    function getUserInfoWithTypes($username = NULL){
        $table="users u";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;


        if(isset($username)){
            $this->db->select('*,ut.name as userTypeName, ut.id as userTypeId')
                ->from($table)
                ->join($schemeVar.".userTypes ut","ut.id=u.userTypeId");

            $this->db->where(array('username'=>$username));

            $query=$this->db->get();

            $row=$query->result();

            if ($row)
                return $row[0];
        }
        return false;
    }


    public function controlLink($link,$userTypeId=0,$optionalCase=0){

        $table="links li";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;
        $conditionArray=[];

        if ($optionalCase==0)
            $conditionArray=array('userTypeId' => $userTypeId);
        else if ($optionalCase==1)
            $conditionArray=array('userTypeId' => NULL);

        $conditionArray['name']=$link;

        $row=$this->countRow($conditionArray,$table);

        return $row->rowCount;

    }

    public function generateLinkAndSave($userTypeName=NULL,$userTypeId = 0)
    {
        $table="links";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        if(isset($userTypeName) && $userTypeId != 0){

            $userTypeName = prepareNameLink($userTypeName);
            if(!($this->controlLink($userTypeName,$userTypeId))){
                // there is no link and save
                //case1: is there any the same link name in the table, if it's not, then save,
                //case 2: if it is, then change link name with random number and save it.
                if(!($this->controlLink($userTypeName,$userTypeId,1))){
                    $this -> save(array('userTypeId'=> $userTypeId, 'name'=>$userTypeName),$table);
                    return $userTypeName;
                }
                else{
                    $randomNumber=rand(1,999999);
                    $userTypeName.="-".$randomNumber;
                    $this -> save(array('userTypeId'=> $userTypeId, 'name'=>$userTypeName),$table);
                    return $userTypeName;
                }
            }
            else //found the link
                return $userTypeName;
        }
        else
            return NULL;

    }

    function getAllUserType(){
        $table="userTypes uT";
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

    public function getUserTypeLink($id=NULL,$where=NULL){
        $table="links li";
        $schemeVar=printSchemeName();
        if (findLocalOrNot()==true)
            $table=$schemeVar.".".$table;

        $this->db->select('*')
            ->from($table);
        if ($where == NULL)
            $this -> db ->where('userTypeId',$id);
        else if ($id == NULL)
            $this -> db -> where('name', $where);

        $query=$this->db->get();
        $row=$query->result();
        if($row)
            return $row[0];
        return FALSE;
    }

    function updateUserType(){
        if($this->update(array("userTypeId"=>$this->userTypeId),array("username" => $this->username))){
            /// Registration is successful
            return true;
        }
        return false;
    }








}


                
                