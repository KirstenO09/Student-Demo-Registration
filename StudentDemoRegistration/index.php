<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
	
</head>
	<body>
	<header>
	<h1>Student Registration</h1>
	
</header>

<script type = "text/javascript">
      function validate() {
      if(( document.registration.studentID.value == "") || isNaN( document.registration.studentID.value ) ||
         (document.registration.studentID.value.length != 8 )) {
         alert( "Please provide your 8 digit ID!" );
         document.registration.studentID.focus() ;
         return false;
      }
      if( document.registration.firstname.value == "") {
         alert( "Please provide your first name!" );
         document.registration.firstname.focus() ;
         return false;
      }
      if( document.registration.lastname.value == "") {
         alert( "Please provide your last name!" );
         document.registration.last_name.focus() ;
         return false;
      }
      if( document.registration.firstname.value == "") {
         alert( "Please provide your first name!" );
         document.registration.firstname.focus() ;
         return false;
      }

      if( !document.registration.firstname.value.match(/^[a-zA-Z ]+$/ ) || !document.registration.lastname.value.match(/^[a-zA-Z ]+$/ )) {
         alert( "Name can only have letters!" );
         document.registration.firstname.focus() ;
         return false;
      }
      if( !document.registration.project.value.match(/^[a-zA-Z ]+$/ )) {
         alert( "Project title can only have letters!" );
         document.registration.project.focus() ;
         return false;
      }
      if( !document.registration.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) ) {
         alert( "Invalid email!" );
         document.registration.email.focus() ;
         return false;
      }
      if( !document.registration.phone.value.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im) ) {
         
         alert( "Enter a correct 10 digit phone number!" );
         document.registration.phone.focus() ;
         return false;
      }
      if (document.registration.slot.value == '0'){
        alert("No slots available for selected time!")
        return false;
      }

      return( true );
   }
      </script>  
	<article>
  <h2>Sign Up for a time slot here</h2>
  
  <form class="registration" name = "registration" id = "registration" form action="mysqli_OOO_RegisteredStudentsTable.php" method="post" onsubmit = "return(validate());">
  <p><span class="error">*required field</span></p>
  <div class="form-group">
 	<label for="id" class="label">ID:</label>
    <input type="text" class="form-control" name = "id" id = "studentID" placeholder="ID"/><br>
	<span class ="error">*</span>
	</div>
	<div class="form-group">
	<label for="firstname" class="label">First Name:</label>
    <input type="text"  class="form-control" name = "firstname" placeholder="First Name"/><br>
	<span class ="error">*</span>
	</div>
	<div class="form-group">
	<label for="lastname" class="label">Last Name:</label>
    <input type="text"  class="form-control" name = "lastname" placeholder="Last Name"/><br>
	<span class ="error">*</span>
	</div>
	<div class="form-group">
	<label for="projectTitle" class="label">Project Title:</label>
    <input type="text"  class="form-control" name = "project" placeholder="Project Title"/><br>
	<span class ="error">*</span>
	</div>
	<div class="form-group">
	<label for="email" class="label">Email:</label>
    <input type="text"  class="form-control" name = "email" placeholder="Email"/><br>
	<span class ="error">*</span>
	</div>
	<div class="form-group">
	<label for="phone" class="label">Phone Number:</label>
    <input type="text"  class="form-control" name = "phone" placeholder="Phone Number"/><br>
	<span class ="error">*</span>
	</div>
	<div class="form-group">
	<label for="slot" class="label">Time Slot:</label>
    <select id="slot" name = "slot" placeholder="slot">
      <?php
        $db = new PDO('mysql:host=localhost;dbname=StudentRegistration;charset=utf8', 'KirstenO', 'cSc5750#2024');
        $result = $db->query("SELECT COUNT(*) AS rowcount FROM RegisteredStudents WHERE slot='4/21/2024 6:00 PM - 7:00 PM'");
        $countq = $result->fetch();
        if($countq['rowcount']==0){
          echo "<option value=\"4/21/2024 6:00 PM - 7:00 PM\">4/21/2024 6:00 PM - 7:00 PM 6 time slots left</option>\n";
        } else if ($countq['rowcount']>=6){
          echo "<option value=\"0\">4/21/2024 6:00 PM - 7:00 PM 0 time slots left</option>\n";
        } 
        else {
          echo "<option value=\"4/21/2024 6:00 PM - 7:00 PM\">4/21/2024 6:00 PM - 7:00 PM " . 6-$countq['rowcount'] . " time slots left</option>\n";
        }
      ?>
      <?php
      $db = new PDO('mysql:host=localhost;dbname=StudentRegistration;charset=utf8', 'KirstenO', 'cSc5750#2024');
      $result = $db->query("SELECT COUNT(*) AS rowcount FROM RegisteredStudents WHERE slot='4/22/2024 6:00 PM - 7:00 PM'");
      $countq = $result->fetch();
      if($countq['rowcount']==0){
        echo "<option value=\"4/22/2024 6:00 PM - 7:00 PM\">4/22/2024 6:00 PM - 7:00 PM 6 time slots left</option>\n";
      } else if ($countq['rowcount']>=6){
        echo "<option value=\"0\">4/22/2024 6:00 PM - 7:00 PM 0 time slots left</option>\n";
      } 
      else {
        echo "<option value=\"4/22/2024 6:00 PM - 7:00 PM\">4/22/2024 6:00 PM - 7:00 PM " . 6-$countq['rowcount'] . " time slots left</option>\n";
      }
    ?>
      <?php
      $db = new PDO('mysql:host=localhost;dbname=StudentRegistration;charset=utf8', 'KirstenO', 'cSc5750#2024');
      $result = $db->query("SELECT COUNT(*) AS rowcount FROM  RegisteredStudents WHERE slot='4/23/2024 6:00 PM - 7:00 PM'");
      $countq = $result->fetch();
      if($countq['rowcount']==0){
        echo "<option value=\"4/23/2024 6:00 PM - 7:00 PM\">4/23/2024 6:00 PM - 7:00 PM 6 time slots left</option>\n";
      } else if ($countq['rowcount']>=6){
        echo "<option value=\"0\">4/23/2024 6:00 PM - 7:00 PM 0 time slots left</option>\n";
      }
       else {
        echo "<option value=\"4/23/2024 6:00 PM - 7:00 PM\">4/23/2024 6:00 PM - 7:00 PM " . 6-$countq['rowcount'] . " time slots left</option>\n";
      }
    ?>
      <?php
      $db = new PDO('mysql:host=localhost;dbname=StudentRegistration;charset=utf8', 'KirstenO', 'cSc5750#2024');
      $result = $db->query("SELECT COUNT(*) AS rowcount FROM  RegisteredStudents WHERE slot='4/24/2024 6:00 PM - 7:00 PM'");
      $countq = $result->fetch();
      if($countq['rowcount']==0){
        echo "<option value=\"4/24/2024 6:00 PM - 7:00 PM\">4/24/2024 6:00 PM - 7:00 PM 6 time slots left</option>\n";
      } else if ($countq['rowcount']>=6){
        echo "<option value=\"0\">4/24/2024 6:00 PM - 7:00 PM 0 time slots left</option>\n";
      } 
      else {
        echo "<option value=\"4/24/2024 6:00 PM - 7:00 PM\">4/24/2024 6:00 PM - 7:00 PM " . 6-$countq['rowcount'] . " time slots left</option>\n";
      }
    ?>
      <?php
      $db = new PDO('mysql:host=localhost;dbname=StudentRegistration;charset=utf8', 'KirstenO', 'cSc5750#2024');
      $result = $db->query("SELECT COUNT(*) AS rowcount FROM RegisteredStudents WHERE slot='4/25/2024 6:00 PM - 7:00 PM'");
      $countq = $result->fetch();
      if($countq['rowcount']==0){
        echo "<option value=\"4/25/2024 6:00 PM - 7:00 PM\">4/25/2024 6:00 PM - 7:00 PM 6 time slots left</option>\n";
      } else if ($countq['rowcount']>=6){
        echo "<option value=\"0\">4/25/2024 6:00 PM - 7:00 PM 0 time slots left</option>\n";
      }
       else {
        echo "<option value=\"4/25/2024 6:00 PM - 7:00 PM\">4/25/2024 6:00 PM - 7:00 PM " . 6-$countq['rowcount'] . " time slots left</option>\n";
      }
    ?>
      <?php
      $db = new PDO('mysql:host=localhost;dbname=StudentRegistration;charset=utf8', 'KirstenO', 'cSc5750#2024');
      $result = $db->query("SELECT COUNT(*) AS rowcount FROM RegisteredStudents WHERE slot='4/26/2024 6:00 PM - 7:00 PM'");
      $countq = $result->fetch();
      if($countq['rowcount']==0){
        echo "<option value=\"4/26/2024 6:00 PM - 7:00 PM\">4/26/2024 6:00 PM - 7:00 PM 6 time slots left</option>\n";
      } else if ($countq['rowcount']>=6){
        echo "<option value=\"0\">4/26/2024 6:00 PM - 7:00 PM 0 time slots left</option>\n";
      }
      else {
        echo "<option value=\"4/26/2024 6:00 PM - 7:00 PM\">4/26/2024 6:00 PM - 7:00 PM " . 6-$countq['rowcount'] . " time slots left</option>\n";
      }
    ?>
    </select>
	</div>
	<br><br>
	<div class="form-group">
    <input type="submit" class="btn-register:hover" value="Register!" onclick="validate()">
	</div>
    
  </form>
  
  <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
	$studentID = $_POST["studentID"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $project = $_POST["project"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $slot = $_POST["slot"];
    
    // Your database saving logic would go here
    
    // Display a message in a pop-up
    echo "<script>
            alert('Thank you for completing the form. You have been added to the Student Registration list.\\n
                  ID: $studentID\\n
                  Name: $firstname $lastname\\n
                  Project Title: $project\\n
                  Email: $email\\n
                  Phone: $phone\\n
                  TimeSlot: $slot\\n
                  This is only a sample form. You have not been added to a mailing list.');
            window.location.href = 'index.php';
          </script>";
}
?>
</article>

	</body>
</html>