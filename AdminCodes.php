<!-- <majorname................> -->
<?php 
include "connect.php"; 

if (isset($_POST['addmajor'])) 
{
	$majorname=$_POST['majorname'];
	$img=$_FILES['img']['name'];
	$tmp=$_FILES['img']['tmp_name'];
	


	$qry="SELECT majorname
			FROM bookMajor
			WHERE majorname='$majorname' ";
	$ans=mysqli_query($con,$qry);
	$no=mysqli_num_rows($ans);
	
	if($no==0)
	{
		$qry="INSERT INTO bookMajor(majorname,majorImage)
				VALUES ('$majorname','$img')";
		$ans=mysqli_query($con,$qry);
		
		if ($ans) 
		{
			move_uploaded_file($tmp,"upload/majorImage/$img");
			echo "	<script>
						alert('major name success');
						location.assign('BookMajor.php');
					</script>";
		}
			
		else
			echo mysqli_error($con);
	}
	else
	{
		echo "	<script>
				alert('Book Major already taken. Please try another another major name.');
				location.assign('BookMajor.php');
				</script>";
	}
}
if(isset($_POST['updateMajor']))
{
	$mid = $_POST['mid'];
	$MajorName=$_POST['MajorName'];
	$img=$_FILES['img']['name'];
	$tmp=$_FILES['img']['tmp_name'];

	if($tmp==NULL)
	{
		$update="UPDATE bookMajor SET majorname='$MajorName' WHERE MajorID=$mid";
	$res=mysqli_query($con,$update);
	if($res)
	{
		echo "	<script>
						alert('Major name Update success');
						location.assign('BookMajor.php');
					</script>";

	}
	}

	else
	{

	$update="UPDATE bookMajor SET majorname='$MajorName',majorImage='$img' WHERE MajorID=$mid";
	$res=mysqli_query($con,$update);
	if($res)
	{
		move_uploaded_file($tmp,"upload/majorImage/$img");
		echo "	<script>
						alert('Major name Update success');
						location.assign('BookMajor.php');
					</script>";

	}
	}
	
}
?>

<!-- <AuthorName................> -->
<?php 
include "connect.php"; 
if (isset($_POST['addAuthor'])) 
{
	$authorname=$_POST['authorname'];


	$qry="	SELECT authorname
			FROM author
			WHERE authorname='$authorname'";
	$ans=mysqli_query($con,$qry);
	$no=mysqli_num_rows($ans);
	
	if($no==0)
	{
		$qry="INSERT INTO author(authorname)
				VALUES ('$authorname')";
		$ans=mysqli_query($con,$qry);
		
		if ($ans) 
			echo "	<script>
						alert('Author name success');
						location.assign('Author.php');
					</script>";
			
		else
			echo mysqli_error($con);
	}
	else
	{
		echo "	<script>
				alert('Author NAme already taken. Please try another another major name.');
				location.assign('Author.php');
				</script>";
	}
}

if(isset($_POST['UpdateAuthor']))
{
	$aid = $_POST['aid'];
	$aname=$_POST['authorname'];
	$update="UPDATE author SET authorName='$aname' WHERE authorID=$aid";
	$res=mysqli_query($con,$update);
	if($res)
	{
		echo "	<script>
						alert('Author Update success');
						location.assign('Author.php');
					</script>";

	}
}
?>


<!-- <Categories................> -->
<?php 
include "connect.php"; 
if (isset($_POST['addcategories'])) 
{
	$CatorigiesName=$_POST['CatorigiesName'];
	$mid=$_POST['MajorName'];

	$qry="	SELECT CatorigiesName
			FROM Catorigies
			WHERE CatorigiesName='$CatorigiesName' ";
	$ans=mysqli_query($con,$qry);
	$no=mysqli_num_rows($ans);
	
	if($no==0)
	{
		$qry="INSERT INTO Catorigies(CatorigiesName,MajorID)
				VALUES ('$CatorigiesName',$mid)";
		$ans=mysqli_query($con,$qry);
		
		if ($ans) 
			echo "	<script>
						alert('categories name success');
						location.assign('Categories.php');
					</script>";
			
		else
			echo mysqli_error($con);
	}
	else
	{
		echo "	<script>
				alert('categories name already taken. Please try another another major name.');
				location.assign('Categories.php');
				</script>";
	}
}
if(isset($_POST['updatecategories']))
{
	$cid = $_POST['cid'];
	$CatorigiesName=$_POST['CatorigiesName'];
	$mid=$_POST['MajorName'];

	$update="UPDATE Catorigies SET CatorigiesName='$CatorigiesName',MajorID='$mid'  WHERE CatorigiesID=$cid";
	$res=mysqli_query($con,$update);
	if($res)
	{
		echo "	<script>
						alert('Catorigies Update success');
						location.assign('Categories.php');
					</script>";

	}
}

?>




<!-- <AddBook................> -->
<?php 
include "connect.php"; 
if (!empty($_POST['add'])) 
{
	
	$authorname=$_POST['authorname'];
	$categoriesname=$_POST['CatorigiesName'];
	$tittle=$_POST['tittle'];
	$descri=$_POST['descri'];
	$prices=$_POST['prices'];
	$qty=$_POST['qty'];
	$img=$_FILES['img']['name'];
	$tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($tmp,"upload/book/$img");

	$qry="	SELECT *
			FROM BookName
			WHERE authorID='$authorname' AND CatorigiesID='$categoriesname'";
	$ans=mysqli_query($con,$qry);
	$no=mysqli_num_rows($ans);
	
	if($no==0)
	{
		$qry="INSERT INTO BookName(authorID,CatorigiesID,Tittle,bookDescription,bookImage,prices,qty)
				VALUES ('$authorname','$categoriesname','$tittle','$descri','$img',$prices,'$qty')";
		$ans=mysqli_query($con,$qry);
		
		if ($ans) 
			echo "	<script>
						alert('Add book success');
						location.assign('Addbook.php');
					</script>";
			
		else
			echo mysqli_error($con);
	}
	else
	{
		echo "	<script>
				alert('Please try another another Add book.');
				location.assign('Addbook.php');
				</script>";
	}
}


if (!empty($_POST['bookEdit'])) 
{
	
	$authorname=$_POST['authorname'];
	$categoriesname=$_POST['CatorigiesName'];
	$tittle=$_POST['tittle'];
	$descri=$_POST['descri'];
	$prices=$_POST['prices'];
	$qty=$_POST['qty'];
	$img=$_FILES['img']['name'];
	$tmp=$_FILES['img']['tmp_name'];
	$bid=$_POST['bid'];


	
	if($tmp==NULL)
	{
	$qry="UPDATE bookname SET authorID='$authorname',CatorigiesID='$categoriesname',Tittle='$tittle',bookDescription='$descri',prices='$prices',qty='$qty' WHERE bookID=$bid";
		$ans=mysqli_query($con,$qry);
		
		if ($ans)
		{ 
			echo "	<script>
						alert('Book Update success');
						location.assign('ViewBook.php');
					</script>";
		}
			
		else
			echo mysqli_error($con);
	}

	else
	{
		$qry="UPDATE BookName SET authorID='$authorname',CatorigiesID='$categoriesname',Tittle='$tittle',bookDescription='$descri',bookImage='$img',prices='$prices',qty='$qty' WHERE bookID=$bid;
				";
		$ans=mysqli_query($con,$qry);
		
		if ($ans)
		{ 

			move_uploaded_file($tmp,"upload/book/$img");
			echo "	<script>
						alert('Book Update success');
						location.assign('ViewBook.php');
					</script>";
		}
			
		else
			echo mysqli_error($con);
	}
}





?>
