<?php
    // $arr1=["A1"=>["code"=>"csm200","name"=>"MCA"],"A2"=>["code"=>"csm200","name"=>"MCA"]];
    //     $arr=["code"=>"csm200","name"=>"MCA"];   // associate array
    //     echo json_encode($arr1);
    //     exit;
    $rv=["a"=>["id"=>1,"name"=>"Hariom","code"=>"CSM"],
    "b"=>["id"=>2,"name"=>"Nikhil","code"=>"CSB"],
    "c"=>["id"=>3,"name"=>"Vivek","code"=>"CSI"]];
echo json_encode($rv);
?>