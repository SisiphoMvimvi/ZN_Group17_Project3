  <?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  //Database connection
  
  $conn = new mysqli("localhost", "root", "", "contactus");
   if($conn->connect_error){
	   die('Connection Failed : ' , $conn->connect_error);
	   else{
		   $stmt = $conn->prepare("insert into contactUs(name, email,message)
		   values(?, ?, ?)");
		   $stmt->bind_parm("sss",$name, $email, $message);
		   $stmt->execute();
		   echo "contactUs successfully.."
		   $stmt -> close();
	   $conn -> close();
	   
	   }
  
  ?>