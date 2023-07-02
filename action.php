<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'user_db';
 
    $con = mysqli_connect($host, $user, $password, $database);
 
    if (!$con){
        ?>
            <script>alert("Connection Unsuccessful!!!");</script>
        <?php
    }
?>

<?php 

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
        $age = $_POST["age"];
        $weight = $_POST["weight"];
        $email = $_POST["email"];
    

		if (isset($_FILES['pdf_file']['name']))
		{
		$file_name = $_FILES['pdf_file']['name'];
		$file_tmp = $_FILES['pdf_file']['tmp_name'];

		move_uploaded_file($file_tmp,"./pdffolder/".$file_name);

		$insertquery =
		"INSERT INTO user_details(name, age, weight, email, pdf_file) VALUES('$name','$age','$weight','$email','$file_name')";
		$iquery = mysqli_query($con, $insertquery);
		}
		else
		{

		echo "Upload in pdf format";
		
		}
	}
?>

      
      
