<?php

$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath. "/project_rcb/DBHandler/DBStudentDetails.php";
$dbo=new DBStudentDetails();

    $action=$_POST["action"];
    if($action=="loginHandler")
    {
        $un=$_POST["username"];
        $pwd=$_POST["pwd"];
      //  $un=$un." was entered by you";  // this all line will be print in place of username.    
        
        $status="";
        $id=$dbo->getId($un,$pwd);
        $name=$dbo->getName($id);
        // if($un=="abc123" && $pwd=="123abc")
        // {
        //     $status="OK";
        // }
        // else
        // {
        //     $status="ERROR";
        // }

        if($id==-1)
        {
            $status="ERROR";
            session_start();
            session_destroy();
        }
        else
        {
            session_start();
            $_SESSION["studentid"]=$id;
            $status="OK";
        }
       // $rv=array("hariom"=>"OK","color"=>"Red","yourusername"=>$un,"yourpossword"=>$pwd);
       $rv=array("status"=>$status);                // what is status here? 
        echo json_encode($rv);             
        exit;

    }
    if($action=="otherHandler")
    {
        
    }
?>