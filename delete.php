<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="dataonline";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="delete from sinhvien where Ma=0";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "Đã delete thành công";
}
else
{
    echo "Có lỗi: ".$conn->error;
}
$conn->close();//dong ket noi

?>