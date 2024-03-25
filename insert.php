<?php
// khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="dataonline";//ten database
// tao ket noi csdl
$conn = new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="insert into sinhvien (Hoten,SoDT,Ma) values ('Anh','192832934534',1)";
// thuc hien insert
if($conn->query($sql)===TRUE){
    echo "Đã insert thành công";
}else{
    echo "có lỗi: " .$conn->error;
}
$conn->close();//dong ket noi
?>