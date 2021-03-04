 <?php 
  
       $link = mysqli_connect("localhost","guviregi_table","rajuraju1234","guviregi_table");
       
       $email = $_POST["email"];
        $pass = $_POST["password"]; 
       $sql=mysqli_query($link,"SELECT * FROM tsraj where email='$email' and password='$pass'");
         $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        echo "<script>window.location.href='editer.html'</script>";
    }
    else
    {
        echo "<script>window.location.href='notvalid.html'</script>";
    }
         
      
?>