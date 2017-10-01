<?php
session_start();
if(!isset($_SESSION['logged_in']))
  {
    header('Location:./index.php');
  }

require_once('connect.php');

$name =$_POST["name"];
$gender = $_POST["gender"];
$contact=$_POST["contact"];
$service =$_POST["services"];
$rating = $_POST["rating"];
$notes=$_POST["notes"];

$userdata=$_SESSION['userData'];

$uid=$userdata['id'];

//-------------- image handling-------

if(isset($_FILES['imageToupload']))
{
$filename = $_FILES['imageToupload']['name'];
$filesize =	$_FILES['imageToupload']['size'];
$filetmp = 	$_FILES['imageToupload']['tmp_name'];
$filetype =	$_FILES['imageToupload']['type'];
$fileext = 	strtolower(end(explode('.',$_FILES['imageToupload']['name']))); 

//echo "image ". $image ."</br>";
echo "file name : ".$filename ."</br>";
echo "file size : ".$filesize ."</br>";
echo "file tmp : ".$filetmp."</br>";
echo "file type : ".$filetype."</br>"; 
echo "file ext : ".$fileext."</br>";



$image = $uid.".".$fileext;
echo "filename : ".$image;
move_uploaded_file($filetmp,"guideimages/".$image);
echo "success";


}

//image upload script

$sql = "insert into guide(name,gender,contactnum,service,image,rating,uid,notes) values('$name','$gender','$contact','$service','$image',$rating,$uid,'$notes') ";
	echo $sql;

$retval = mysqli_query($conn,$sql);
if($retval ==0)
	echo "error in insertion";
else
	 echo "inserted guide info";

 mysqli_close($conn);





?>
