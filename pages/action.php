<?php
require_once("connection.php");

if(isset($_POST['button'])){
	
	$name=$_POST['name'];
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$city=$_POST['city'];
	$blood=$_POST['blood_group'];
	
 if($name==''||$email==''||$pass==''||$city==''||$blood==''){
	echo "<script>alert('please fill the fields')</script>";
	header("location:form.php");
}
else{
	$sql="insert into signup(name,email,pass,city,blood_group) values('$name','$email','$pass','$city','$blood')" ;

	$query=mysqli_query($conn,$sql);
	if($query){
		header("location:myaccount.php");
		$sql="SELECT * FROM signup WHERE name=$name";
        $qe=mysqli_query($conn,$sql);

           while($row=mysqli_fetch_array($qe)){
	        echo "$row[fname]"; 
}
	}
	else{
		echo"not success";
	}
	}
}

if(isset($_POST['blood'])){
	
	$name=$_POST['c_name'];
	$blood=$_POST['bg'];
	$unit=$_POST['no_u'];
	$con=$_POST['con'];
	
	
	
 if($name==''||$blood==''||$unit==''||$con==''){
	echo "<script>alert('please fill the fields')</script>";
	header("location:addblood_sell.php");
}
else{
	$sql="insert into blood_sell(name,bg,no_u,con) values('$name','$blood','$unit','$con')" ;

	$query=mysqli_query($conn,$sql);
	if($query){
		
		echo "<script>alert('insert successfully')</script>";
	}
	else{
		echo"not success";
	}
	}
}


if(isset($_POST['bloods'])){
	
	$name=$_POST['c_name'];
	$blood=$_POST['bg'];
	$unit=$_POST['no_u'];
	$con=$_POST['con'];
	
	
	
 if($name==''||$blood==''||$unit==''||$con==''){
	echo "<script>alert('please fill the fields')</script>";
	header("location:addblood_stock.php");
}
else{
	$sql="insert into blood_stock(name,bg,no_u,con) values('$name','$blood','$unit','$con')" ;

	$query=mysqli_query($conn,$sql);
	if($query){
		
		echo "<script>alert('insert successfully')</script>";
	}
	else{
		echo"not success";
	}
	}
}

?>