<?php
// khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="dataonline";//ten database
// tao ket noi csdl
$conn = new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="update sinhvien set Hoten='kienabc update',SoDT='19001008 update' where Ma=0";
//thuc thi lenh
if($conn->query($sql)=== TRUE){
    echo "Đã update thành công";
}else{
    echo "Có lỗi: " .$conn->error;
}
$conn->close();// dong ket noi
?>