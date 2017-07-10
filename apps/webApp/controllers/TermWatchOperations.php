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
class termWatchOperations extends CI_Controller
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

            //getAllAssigns

            $this->load->model('assignOperToLab');

            if ($getAllAssigns = $this->assignOperToLab->getAllAssigns()) {
                $dummyArray = [];
                foreach ($getAllAssigns as $row) {

                    $dummyArray[] = array(
                        'dormitoryId' => $row->id,
                        'monday' => explode("-", $row->monday),
                        'tuesday' => explode("-", $row->tuesday),
                        'wednesday' => explode("-", $row->wednesday),
                        'thursday' => explode("-", $row->thursday),
                        'friday' => explode("-", $row->friday),
                        'saturday' => explode("-", $row->saturday),
                        'sunday' => explode("-", $row->sunday),

                    );

                }


            } else {
                // There is no found for assign in the system.

                redirect("main");
            }

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
            loadView("termWatchOperations", $data);
            loadView("footer");

        } else
            redirect("main");


    }






}

