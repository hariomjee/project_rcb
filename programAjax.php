<?php
    // $arr1=["A1"=>["code"=>"csm200","name"=>"MCA"],"A2"=>["code"=>"csm200","name"=>"MCA"]];
    //     $arr=["code"=>"csm200","name"=>"MCA"];   // associate array
    //     echo json_encode($arr1);
    //     exit;
    $rv=["a"=>["id"=>-232,"name"=>"Computer application","code"=>"CSM"],
    "b"=>["id"=>10,"name"=>"Electronics  application","code"=>"ECM"],
    "c"=>["id"=>11,"name"=>"English","code"=>"EGI"]];
echo json_encode($rv);
?>