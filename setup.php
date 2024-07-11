<?php 
$hostname="localhost";
$dbhost="root";
$pwd="";
$dbname="Library";
$con=mysqli_connect($hostname,$dbhost,$pwd);
if($con)
	echo "database connection successfully created.";
else
	echo mysqli_connect_error();

$qry="CREATE DATABASE IF NOT EXISTS Library";
$result=mysqli_query($con,$qry);

if($result)
	echo "<br>"."Library database create success.";
else
	echo mysqli_error($con);

mysqli_select_db($con,"Library");

// .......

$qry="CREATE TABLE IF NOT EXISTS Member
	(
		memberID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		MemberName VARCHAR(30),
		email VARCHAR(50),
		password VARCHAR(50),
		phone VARCHAR(30),
		Address VARCHAR(50)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"."Member table success";
else
	echo mysqli_error($con);

// .......

$qry="CREATE TABLE IF NOT EXISTS feedback
	(
		feedbackID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		memberID INT,
		feedback VARCHAR(100),
		FOREIGN KEY(memberID) REFERENCES Member(memberID)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"."User borrow success";
else
	echo mysqli_error($con);

// .......


$qry="CREATE TABLE IF NOT EXISTS borrow
	(
		borrowID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		memberID INT,
		status Int(30),
		borrowDate date,
		returnDate date,
		FOREIGN KEY(memberID) REFERENCES Member(memberID)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"." borrow table success";
else
	echo mysqli_error($con);

// .......


$qry="CREATE TABLE IF NOT EXISTS delivery
	(
		deliID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		borrowID INT,
		FOREIGN KEY(borrowID) REFERENCES borrow(borrowID)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"." delivery table success";
else
	echo mysqli_error($con);

// .......

$qry="CREATE TABLE IF NOT EXISTS bookMajor
	(
		MajorID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		MajorName VARCHAR(50)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"." bookMajor table success";
else
	echo mysqli_error($con);



$qry="CREATE TABLE IF NOT EXISTS Catorigies
	(
		CatorigiesID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		MajorID INT,
		CatorigiesName VARCHAR(50),
		FOREIGN KEY(MajorID) REFERENCES bookMajor(MajorID)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"."Catorigies table success";
else
	echo mysqli_error($con);


$qry="CREATE TABLE IF NOT EXISTS author
	(
		authorID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		authorName VARCHAR(50)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"."author table success";
else
	echo mysqli_error($con);


$qry="CREATE TABLE IF NOT EXISTS BookName
	(
		bookID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		authorID INT,
		CatorigiesID INT,
		Tittle VARCHAR(50),
		bookDescription VARCHAR(50),
		bookImage VARCHAR(50),
		prices VARCHAR(50),
		qty VARCHAR(50),
		FOREIGN KEY(authorID) REFERENCES author(authorID),
		FOREIGN KEY(CatorigiesID) REFERENCES Catorigies(CatorigiesID)

	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"."BookName table success";
else
	echo mysqli_error($con); 


$qry="CREATE TABLE IF NOT EXISTS booking
	(
		orderID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
		borrowID INT,
		bookID INT,
		orderDate date,
		bookNameDesc VARCHAR(50),
		FOREIGN KEY(borrowID) REFERENCES borrow(borrowID),
		FOREIGN key(bookID) REFERENCES BookName(bookID)
	)";
$result=mysqli_query($con,$qry);
if($result)
	echo "<br>"."booking table success";
else
	echo mysqli_error($con);
?>

