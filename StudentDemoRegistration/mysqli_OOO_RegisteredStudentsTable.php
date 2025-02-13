<!DOCTYPE html>
<html>
	<head>
		<style>
		table, th, td {
			border: 1px solid black;
		}
		</style>
	</head>
	<body>
	<center>
        <?php
 // After successfully processing the form data, redirect to another page
		//header("Location: RegisteredStudents.php");
		//exit;
        // servername => localhost
        // username => KirstenO
        // password => csc5750#2024
        // database name => StudentRegistration
        $conn = mysqli_connect("localhost", "KirstenO", "cSc5750#2024", "StudentRegistration");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $id = $_REQUEST['id'];
        $firstname =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $project =  $_REQUEST['project'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $slot = $_REQUEST['slot'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO RegisteredStudents VALUES ('$id', '$firstname',
            '$lastname','$project','$email','$phone','$slot')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Registration successful!</h3>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        header('Location: RegisteredStudents.php');
        ?>
    </center>
	</body>
</html>