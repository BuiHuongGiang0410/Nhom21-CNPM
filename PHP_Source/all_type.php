<?php
$link = mysqli_connect("localhost", "id3811627_admin", "admin", "id3811627_cooking");
mysqli_query($link, "SET NAMES 'utf8'");

$type = mysqli_query($link, "SELECT * FROM `type`");
$mang = array();
while ($row = mysqli_fetch_array($type)) {
    $id = $row["idType"];
    $name = $row["nameType"];
    $img = $row["imgType"];
    array_push($mang, new Type($id, $name, $img));
}
echo json_encode($mang);

class Type
{

    var $idType;

    var $nameType;

    var $imgType;


    function Type($i, $n, $m)
    {
        $this->idType = $i;
        $this->nameType = $n;
        $this->imgType = $m;
      
    }
}
?>