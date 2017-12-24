<?php

$connect = mysqli_connect("localhost","id3811627_admin","admin","id3811627_cooking");
mysqli_query($connect,"SET NAMES 'utf8'");
$query = "SELECT idType,nameType,imgType0 FROM type";
$data = mysqli_query($connect, $query);
class Cooking{
    function Cooking($idType,$nameType,$imgType){
       $this->ID = $idType;
       $this->Name = $nameType;
        $this->Img = $imgType;
      
        
    }
}
$mang = array();
$row1 = array();
$row2 = array();
$row_array=array();

while($row = mysqli_fetch_assoc($data)){

       $row1 =  base64_encode($row['imgType']);
            
	 array_push($mang, new Cooking($row['idType'],$row['nameType'],$row1));

}



echo json_encode($mang);


?>