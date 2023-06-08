<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HMS";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//sql to create table employee
// $sql = "CREATE TABLE EMPLOYEE(
// empId VARCHAR(30) PRIMARY KEY,
// firstname VARCHAR(30),
// middlename VARCHAR(30),
// lastname VARCHAR(30),
// dbrith VARCHAR(30) ,
// age VARCHAR(30) ,
// gender VARCHAR(10),
// phone VARCHAR(30) ,
// country VARCHAR(50),
// region VARCHAR(50),
// stffaddress  VARCHAR(50),
// proffession VARCHAR(50),
// salary VARCHAR(30),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
//create table for pateint
// $sql = "CREATE TABLE PATEINTS(
//   pateintCode VARCHAR(30) PRIMARY KEY,
//   pname VARCHAR(30),
//   dbrith VARCHAR(30) ,
//   age VARCHAR(30) ,
//   disease VARCHAR(30) ,
//   email VARCHAR(50),
//   gender VARCHAR(10),
//   bgroup VARCHAR(50),
//   city VARCHAR(50),
//   paddress  VARCHAR(50),
//   contact VARCHAR(50),
//   allname VARCHAR(50),
//   start_day DATE,
//  symptom VARCHAR(255),
//  reason VARCHAR(255),
//  how_long VARCHAR(255),
// test VARCHAR(255),
// test_type VARCHAR(255),
// txt_view VARCHAR(255),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
    //create table for  medicine

    // $sql = "CREATE TABLE medicines(
    //   itemid VARCHAR(30) PRIMARY KEY,
    //   itemname VARCHAR(30) ,
    //   category VARCHAR(30) ,
    //   itemPrice VARCHAR(30) ,
    //   amount VARCHAR(30) ,
    //   total VARCHAR(30) ,
    //   recorded VARCHAR(30) 
    //   )";

// $sql = "CREATE TABLE EMAILandPASSWORD(
//     emila VARCHAR(30) ,
//     passwd VARCHAR(30) ,
//     passconf VARCHAR(30) 
//     )";
//create table for billinfo
// $sql = "CREATE TABLE BILLTABLE(
//   cardNo VARCHAR(30) ,
//   itemid VARCHAR(30) PRIMARY KEY,
//   amount VARCHAR(30) ,
//   price VARCHAR(30) ,
//   noday VARCHAR(30) ,
//   total VARCHAR(10),
//   roomno VARCHAR(50),
//   nameacceptor VARCHAR(10),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//   FOREIGN KEY(cardNo) REFERENCES PATEINTS(pateintCode)
//   )";

// $sql = "CREATE TABLE ATTENDANCE(
 
//   empid VARCHAR(30) ,
//   date VARCHAR(30) ,
//   mark VARCHAR(30) ,
//   permission VARCHAR(30) ,
//   reason VARCHAR(250),
//   FOREIGN KEY(empid) REFERENCES EMPLOYEE(empId)
//   )";

$sql = "CREATE TABLE Laboratory(
 
  patient_id VARCHAR(30) ,
  bloodTest VARCHAR(30) ,
  urineTest VARCHAR(30) ,
  x_ray VARCHAR(30) ,
  OtherInfo VARCHAR(250),
  FOREIGN KEY(patient_id) REFERENCES pateints(pateintCode)
  )";
if ($conn->query($sql) === TRUE) {
  echo "Table Laboratory created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>