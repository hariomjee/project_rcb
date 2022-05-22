<?php
$servername = "localhost";
$username = "prakash";    // make a user account into phpmyadmin name prakash
$password = "abc123";    // and give that account a password  is abc123
$databasename="ourdatabase";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// let execute sql commond on this connection 
try{
$cmd="insert into student_details (rollno,name,password) values('csm20072','nikhil','abc123')";
$conn->exec($cmd);
}
catch(PDOException $ee)
{
  echo $ee->getMessage();   // ?   after write this code how this output is comming - Connected successfullySQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'csm20016' for key 'rollno'
}


// this is another way of giving input in database
try{
  $cmd="insert into student_details (rollno,name,password) values(:rollno,:tname,:password)";
  $templet=$conn->prepare($cmd);

  $templet->bindValue(":rollno","CSM20001");
  $templet->bindValue(":tname","Ashok G");
  $templet->bindValue(":password","abc123");

  $templet->execute();
  }
  catch(PDOException $ee)
  {
    echo $ee->getMessage();   
  }

  // again another way of giving input in database

  try{
    $cmd="insert into student_details (rollno,name,password) values(:rollno,:tname,:password)";
    $templet=$conn->prepare($cmd);
  
    $templet->bindParam(":rollno",$vrollno);
    $templet->bindParam(":tname",$vname);      // try to give as parameter and this vrollno,vname and vpassword are vairiables
    $templet->bindParam(":password",$vpassword);

    // now assign values to variables

    $vrollno="CSM20031";
    $vname="iro man";
    $vpassword="abc123";
    $templet->execute();

    $vrollno="CSM20032";
    $vname="mr man";
    $vpassword="abc123";
    $templet->execute();

    $vrollno="CSM20034";
    $vname="capt man";
    $vpassword="abc123";
    $templet->execute();
    }
    catch(PDOException $ee)
    {
      echo $ee->getMessage();   
    } 

    // again some another way to give input in database

    try{
      $cmd="insert into student_details (rollno,name,password) values(:rollno,:tname,:password)";
      $templet=$conn->prepare($cmd);
    
     $templet->execute(array(":rollno"=>"SCM20010",":tname"=>"amit",":password"=>"abc123"));
     $templet->execute([":rollno"=>"SCM20022",":tname"=>"sumit",":password"=>"abc123"]);
      }
      catch(PDOException $ee)
      {
        echo $ee->getMessage();   
      }

      // let  do some other tasks

      try{
       $cmd=("select * from student_details");
       $templet=$conn->prepare($cmd);

       $templet->execute();
       echo("<br>".$templet->columnCount());  //print how many columns are in table
       echo("<br>".$templet->rowCount()."<br>");   // print how many rows are in table

       $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
       print_r($rv);
       echo("<br>");
       $tv=[[":rollno"=>"SCM20020",":tname"=>"ganesh",":password"=>"abc123"],[":rollno"=>"SCM20032",":tname"=>"mahadev",":password"=>"abc123"]];
       print_r($tv);
        }
        catch(PDOException $ee)
        {
          echo $ee->getMessage();   
        }




        try{
          echo("<br>");
          echo("<br>");
          $cmd="select * from student_details where name like :rollno";
          $templet=$conn->prepare($cmd);
          $templet->execute([":rollno"=>"_____ %"]);
          $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
          var_dump($rv);
           }
           catch(PDOException $ee)
           {
             echo $ee->getMessage();   
           }
?>   