 
   <?php
    $user = "root";
    $passwo = "";
    $db = "raju";
    
    $link = mysqli_connect("localhost","guviregi_table","rajuraju1234","guviregi_table");
     
    
   $firstname=$_POST['first_name'];
   $lastname = $_POST['last_name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];

    $sql = "INSERT INTO tsraj (firstname, lastname, email,password) VALUES ('$firstname', '$lastname', '$email','$pass')";
       if (mysqli_query($link, $sql)) {
		  echo "<script type='text/javascript'>alert('Thank you for registered!!! click login button');</script>";
	} 
	else {
		echo "<script type='text/javascript'>alert('Error In database please try again later!!');</script>";
	}
   	
   
?>