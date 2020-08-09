<?php
 require("newcon.php");
$aname = $_POST["aname"];
$bname = $_POST["bname"];
$cname = $_POST["cname"];
$dname = $_POST["dname"];
$ename = $_POST["ename"];


if($_POST["aname"]!='' && $_POST["bname"]!='' && $_POST["cname"]!='' && $_POST["dname"]!='' && $_POST["ename"]!='')
{
    // if($dname == $ename)
    // {
        $query = "insert into `data` (Fname,Lname,Phone,Email,Address) values('$aname','$bname','$cname','$dname','$ename')";
        $result = mysqli_query($conn,$query);
        // $conn =mysqli_connect($servername,$dbuser,$dbpass,$database);
        if($result){
    header("Location:http://localhost/Navhotel/login.html?msg=registrationsuccesfull");
        }else{
            // mysqli_error($conn);
    header("Location:http://localhost/Navhotel/login.html?msg=registrationfailed");
        }
}
   
else
{
    header("Location:http://localhost/Navhotel/login.html?msg=registrationfailed");
}

?>