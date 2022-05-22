<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
//require_once $rootpath. "/project_rcb/DBHandler/DatabaseConnection.php";
require_once $rootpath. "/project_rcb/DBHandler/DBStudentDetails.php";
// $dbo=new DBConnection();  //dbo for database object and DBConnection is name of class in DatabaseConnection.php file

// $conn=$dbo->conn;  // necessary else conn will give error
// try{
//     echo("<br>");
//     echo("<br>");
//     $cmd="select * from student_details where name like :rollno";
//     $templet=$conn->prepare($cmd);
//     $templet->execute([":rollno"=>"_____ %"]);
//     $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
//     var_dump($rv);
//      }
//      catch(PDOException $ee)
//      {
//        echo $ee->getMessage();   
//      }

$dbo=new DBStudentDetails();

$rv=$dbo->getId("csm20016","abc123");   // by this query it give id no if this rollno and password is in table else give -1 
echo($rv);
     
?>