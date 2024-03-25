<?php
// khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="dataonline";//ten database
// tao ket noi csdl
$conn = new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="select * from sinhvien";
//thuc thi lenh
$kq = $conn->query($sql);// tra ve 1 tap du lieu(giong 1 bang)
while($row[]=$kq->fetch_assoc()){// doc tung dong
    $json=json_encode($row);// chuyen thanh json

}
echo '{"test":'.$json.'}';
$conn->close();// dong ket noi
?>