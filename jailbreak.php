<?php
  require_once('Conection.php');

  $query = "SELECT * FROM app_version AS av INNER JOIN app AS a ON av.app_id = a.app_id JOIN model_app AS ma ON ma.app_id = a.app_id WHERE av.VersionID = '".$_POST['version_no']."' AND ma.model_id = '".$_POST['model_no']."'";
  $exicute_query = mysqli_query($con,$query);
  $row_count = mysqli_num_rows($exicute_query);

  $array = [];//create a empty array

  if($row_count>0){
    for($i=0; $i<$row_count;$i++){
      $row = $exicute_query->fetch_assoc();
      array_push($array,$row);
    }
  }

  if(!empty($array)){
    echo json_encode($array);
  }else{
    echo json_encode(['message'=>0]);
  }
  

?>