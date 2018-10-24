


<?php
$servername="localhost";
$db="Apply";
$username="root";
$password="";
$connection = mysqli_connect($servername, $username, $password, $db); // Establishing Connection with Server
if(!$connection)
{
        die("Database connection failed: " . mysqli_connect_error());
   
}
else
{ echo "connection established";
}
echo "<br>";




$db = mysqli_select_db($connection, $db); // Selecting Database from Server
  if (!$db) {
        die("Database selection failed: " . mysqli_connect_error());
    }
	else
{ echo "database established";
echo "<br>";

}




$fname = " ";
$mname = " " ;
$lname = " ";

$dob = " ";
$gender = " ";
$contact =" ";
$email = " ";
$a1= " ";
$a2 = " ";
$a3= " ";
$a4 =" ";
$a5 =" ";
$a6 = " ";
$c1=" ";
$c2=" ";
$c3=" ";
$c4=" ";
$c5=" ";
$c6= " ";
$c7= " ";
$c8=" ";
$c9=" ";
$c10=" ";
$c11=" ";
$c12=" ";
$c13=" ";
$c14=" ";
$c15=" ";
$c16=" ";
$c17=" ";
$c18=" ";
$c19=" ";
$c20=" ";

$organisation=" ";
$orgstrtdate=" ";
$orgenddate=" ";
$jobrole=" ";
$country=" ";
$state=" ";
$city=" ";
$refname=" ";
$refcontact=" ";
$refemail=" ";
$file=" ";





 // Fetching variables of the form which travels in URL
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$name=$fname." ".$mname." ".$lname;
$dob = $_POST['bday'];
$gender = $_POST['gender'];
$contact = $_POST['no1'];
$email = $_POST['usremail'];
$a1= $_POST['a1'];
$a2 = $_POST['a2'];
$a3= $_POST['a3'];
$a4 = $_POST['l1'];
$a5 = $_POST['l2'];
$a6 = $_POST['l3'];

$address = $a1." ".$a2." ".$a3." ".$a4." ".$a5." ".$a6;

if(isset($_POST['submit'])){
  $file=$FILES['file'];
  $filename =$FILES['file']["name"];
  $fileTmpName =$FILES["file"]["tmp_name"];
  $fileSize =$FILES["file"]["size"];
  $fileError =$FILES["file"]["error"];
  $fileType =$FILES["file"]["type"];

  $fileExt=explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed= array('pdf','txt','doc','docx');
  
  
  if(in_array($fileActualExt,$allowed))
  {
	  if($_FILES["file"]["error"]==0)
	  {
		  if($fileSize<10000000)
		  {
			  $fileNameNew=uniqid('',true).".".$fileActualExt;
			  $fileDestination='uploads/'.$fileNameNew;
			  move_uploaded_file($fileTmpName, $fileDestination);
			  header("Location: index.php?uploadsuccess");
		  }
		  else {echo "file is too big";}
	  }else{echo "error in file";}
  
  }
  else{echo "you cannot upload the file";}
  
  
if(getimagesize($FILES['file']['tmp_name']==FALSE))
{
	echo "Please select a file";
}
else
{
	  $file=addslashes(file_get_contents($FILES['file']['tmp_name']));
	  $file=addslashes(file_get_contents($FILES['file']['name']));
	  $file=file_get_contents($file);
	  $file=$base64_encode($file);
}




	  
	  
	
  
  
  
}



$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];
$c7=$_POST['c7'];
$c8=$_POST['c8'];
$c9=$_POST['c9'];
$c10=$_POST['c10'];
$c11=$_POST['c11'];
$c12=$_POST['c12'];
$c13=$_POST['c13'];
$c14=$_POST['c14'];
$c15=$_POST['c15'];
$c16=$_POST['c16'];
$c17=$_POST['c17'];
$c18=$_POST['c18'];
$c19=$_POST['c19'];
$c20=$_POST['c20'];

$organisation=$_POST['organisation'];
$orgstrtdate=$_POST['sday'];
$orgenddate=$_POST['lday'];
$jobrole=$_POST['jr'];
$country=$_POST['s1'];
$state=$_POST['s2'];
$city=$_POST['s3'];
$refname=$_POST['rname'];
$refcontact=$_POST['no2'];
$refemail=$_POST['refemail'];






$sql = "insert into Information(Name,dob,Gender,contact,email,Address,Highschool_strtdate,Highschool_enddate,Highschool_board,Highschool_subject,Highschool_country,Inter_strtdate,Inter_enddate,Inter_board,Inter_subject,Inter_country,Clg_strtdate,Clg_enddate,Clg_board,Clg_subject,Clg_country,Train_strtdate,Train_enddate,Train_Inst,Train_subject,Train_country,JobOrgan,JobStrtdate,JobEnd,JobRole,JobCountry,JobState,JobCity,refname,refcontact,refmail,Resume)
values ('$name','$dob','$gender','$contact','$email','$address','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14','$c15','$c16','$c17','$c18','$c19','$c20','$organisation','$orgstrtdate','$orgenddate','$jobrole','$country','$state','$city','$refname','$refcontact','$refemail','$file')";

 $query=mysqli_query($connection, $sql);
if (!mysqli_query($connection,$sql))
  {
  echo("Error description: " . mysqli_error($connection));
  }
if($query)
{
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else
{
	echo "query not run";}
mysqli_close($connection); // Closing Connection with Server
?>