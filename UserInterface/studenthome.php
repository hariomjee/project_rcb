<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath. "/project_rcb/DBHandler/DBStudentDetails.php";
$dbo=new DBStudentDetails();
session_start();
if(isset($_SESSION["studentid"]))
{
    $id = $_SESSION['studentid'];
        // $cmd = "select name from student_details where id = $id";
        $name = $dbo->getName($id);    
        echo "Welcome to home page ". $name;
   
}
else
{
    echo"sorry you are not a valid user";
}

?>