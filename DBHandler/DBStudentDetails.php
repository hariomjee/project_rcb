<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath. "/project_rcb/DBHandler/DatabaseConnection.php";

class DBStudentDetails{
    public function getId($rollno,$password)
    {
        // connect with database and return the Id column from the 
        //student_details table where the rollno and password is match
        $id="-1";
        $dbo=new DBConnection();   // DBConnection is class of DatabaseConnection.php file
        $cmd="select id from student_details where rollno=:rollno and password=:password";
        $templet=$dbo->conn->prepare($cmd);

        $templet->execute([":rollno"=>$rollno,":password"=>$password]);

        if($templet->rowCount()>0)
        {
            $rtable=$templet->fetchAll(PDO::FETCH_ASSOC);    
            $id=$rtable[0]['id'];
        }
        return $id;   
    }

    public function getName($id)
    {
        // connect with database and return the Id column from the 
        //student_details table where the rollno and password is match
        
        $dbo=new DBConnection();   // DBConnection is class of DatabaseConnection.php file
        $cmd="select name from student_details where id= :id";
        $templet=$dbo->conn->prepare($cmd);

        $templet->execute([":id"=>$id]);

        if($templet->rowCount()>0)
        {
            $rtable=$templet->fetchAll(PDO::FETCH_ASSOC);    
            $name=$rtable[0]['name'];
        }
        return $name;
    
    }
}


?> 