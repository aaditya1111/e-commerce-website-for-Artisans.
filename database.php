<?php
$servername="localhost";
$db="Apply1";
$username="root";
$password=" ";
// create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "database created!!";
$sql = "CREATE TABLE Information ( 
Name VARCHAR(30) NOT NULL,
dob TIMESTAMP,
Gender VARCHAR(10),

contact INT(10) PRIMARY key,
email VARCHAR(50),
Address VARCHAR(100),
resume LONGBLOB,
Highschool_strtdate TIMESTAMP,
Highschool_enddate TIMESTAMP,
Highschool_board VARCHAR(30),
Highschool_subject VARCHAR(30),
Highschool_country VARCHAR(30),
Inter_strtdate TIMESTAMP,
Inter_enddate TIMESTAMP,
Inter_board VARCHAR(30),
Inter_subject VARCHAR(30),
Inter_country VARCHAR(30),
Clg_strtdate TIMESTAMP,
clg_enddate TIMESTAMP,
Clg_Univ VARCHAR(30),
clg_subject VARCHAR(30),
Clg_country VARCHAR(30),
Train_strtdate TIMESTAMP,
Train_enddate TIMESTAMP,
Train_Inst VARCHAR(30),
Train_subject VARCHAR(30),
Train_country VARCHAR(30),
JobOrgan VARCHAR(50) DEFAULT 'Fresher',
JobStrtdate TIMESTAMP ,
JobEnd TIMESTAMP ,
JobRole VARCHAR(50) DEFAULT 'Fresher',
JobCountry VARCHAR(50) DEFAULT 'Fresher',
JobState VARCHAR(50) DEFAULT 'Fresher',
JobCity VARCHAR(50) DEFAULT 'Fresher',
refname VARCHAR(50) DEFAULT 'Fresher',
refcontact INT(10) ,
refmail VARCHAR(50) DEFAULT 'Fresher'

)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>