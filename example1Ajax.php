<?php
$action = $_POST['action'];
if($action == 'getProgramList'){
    $value = [
        ['id' => '1', 'name' => "Masters in computer application", 'code' => 'CSM'],
        ['id' => '2', 'name' => "B.tech in computer science", 'code' => 'CSB'],
        ['id' => '3', 'name' => "English", 'code' => 'Eng'],
        ['id' => '4', 'name' => "B.tech in computer science", 'code' => 'CSB'],
        ['id' => '5', 'name' => "English", 'code' => 'Eng'],
    ];
    $result = json_encode($value);
    echo $result;

}
if($action=='getStudentlist'){
    $id = $_POST['id'];
    if($id ==1){
        $value = [
            ['id' => '1', 'name' => "Random", 'rollno' => 'CSM20039'],
            ['id' => '2', 'name' => "chinmay", 'rollno' => 'CSB20015'],
            ['id' => '3', 'name' => "something", 'rollno' => 'Eng20015']
        ];
    }
    else if ($id == 2) {
        $value = [
            ['id' => '1', 'name' => "Random2", 'rollno' => 'CSM20039'],
            ['id' => '2', 'name' => "chinmay2", 'rollno' => 'CSB20015'],
            ['id' => '3', 'name' => "something2", 'rollno' => 'Eng20015']
        ];
    }
    else if ($id == 3) {
        $value = [
            ['id' => '1', 'name' => "Random3", 'rollno' => 'CSM20039'],
            ['id' => '2', 'name' => "chinmay3", 'rollno' => 'CSB20015'],
            ['id' => '3', 'name' => "something3", 'rollno' => 'Eng20015']
        ];
    }
    else{
        $value = [
            ['id' => '1', 'name' => "Randomx", 'rollno' => 'CSM20039'],
            ['id' => '2', 'name' => "chinmax", 'rollno' => 'CSB20015'],
            ['id' => '3', 'name' => "somethingx", 'rollno' => 'Eng20015']
        ];
    }
   
    $result = json_encode($value);
    echo $result;
}
 
?>