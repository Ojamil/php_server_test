<?php
 header('Content-type: application/json');
        $data = json_decode((file_get_contents('php://input')),true);

        $id = $data["uid"];

        $db = new mysqli("localhost", "root", "youarefool",'test');
        $q = "select * from User u where u.uid = ".$id;
        $result = $db->query($q);
        //$row = $result->num_rows;
        //for ($i = 0; $i < $row; $i++){
        $s = mysqli_fetch_assoc($result);
                //echo "name", ':', $s['name'], ' ';
                //echo "uid", ':', $s['uid'], ' ';
                //echo "age", ':', $s['age'], "\n";
        $arr = array("name"=>$s['name'], "age"=>$s['age']);
        $js = json_encode($arr);
        echo $js;

        $db->close();
?>
