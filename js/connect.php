<?php
$Name = $_Post['Name'];
$Email = $_Post['Email'];
$Subject = $_Post['Subject'];
$Textarea = $_Post['Textarea'];
//Database connection 
$conn =new mysqli('localhost','root','','sql6586165')
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{$stmt =$conn->prepare("insert into Website_input(Name, Email, Subject, Textarea)
values(?, ?, ?, ?)");
$stmt->bind_param("ssss",$Name, $Email, $Subject, $Textarea);
$stmt->execute();
echo "registration Successful.."
$stmt->close();
$conn->close();
}
?>