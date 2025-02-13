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
  <h1>Registered Students</h1>
</header>





  <table class="bordered-table">
<caption>Registrations</caption>
<tr>
    <th>ID
    <th>First Name
    <th>Last Name
    <th>Project Title
    <th>Email
    <th>Phone
    <th>Time Slot
</tr>

<?php
  $db = mysqli_connect("localhost", "KirstenO", "cSc5750#2024", "StudentRegistration");

  $result = $db->query("SELECT studentID, firstname, lastname, project, email, phone, slot FROM RegisteredStudents");

  while ($row = $result->fetch_assoc()) 
  {
     print "<tr>\n";
     print "  <td>" . ($row["studentID"]) . "\n";
     print "  <td>" . ($row["firstname"]) . "\n";
     print "  <td>" . ($row["lastname"]) . "\n";
     print "  <td>" . ($row["project"]) . "\n";
     print "  <td>" . ($row["email"]) . "\n";
     print "  <td>" . ($row["phone"]) . "\n";
     print "  <td>" . ($row["slot"]) . "\n";
     print "</tr>\n";
  }
  $db->close();
?>
</table>
<div class="btn-group">
<button class="btn-page:hover"><a href="./index.php" style="text-decoration: none; color: inherit;">Go to previous page</a></button>
</div>
</body>
</html>