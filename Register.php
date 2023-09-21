<html>
<body style="background-color:AntiqueWhite;">
<b>Student_Id:</b><?php
echo $_POST["reg_no"];?><br>
 <b>Hii</b> <?php
echo $_POST["fname"];?>.
<?php echo $_POST["lname"];?><br>
<font color="Blue">Your Details Has Been Submitted</font><br>
<b>Date of Birth:</b><?php
echo $_POST["date"];?><br>
<b>Age:</b><?php
echo $_POST["age"];?><br>
<b>Address:</b><?php
echo $_POST["address"];?><br>
<b>Gender:</b><?php
echo $_POST["gender"];?><br>
<b>E-mail:</b><?php
echo $_POST["email"];
?><br>
<b>Phone_No:</b><?php
echo $_POST["number"];
?><br>
<b>Education Completed Upto:</b><?php
echo $_POST["Education"];
?><br>
<b>Course:</b><?php
echo $_POST["Program"];?><br>
</html>


<?php
$reg_no = filter_input(INPUT_POST, 'reg_no');
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$date = filter_input(INPUT_POST, 'date');
$age = filter_input(INPUT_POST, 'age');
$address = filter_input(INPUT_POST, 'address');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
$Ph_no = filter_input(INPUT_POST, 'number');
$Education = filter_input(INPUT_POST, 'Education');
$Program = filter_input(INPUT_POST, 'Program');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)  {
  die("Connection failed: " . mysqli_connect_error());  
} 
$sql = "INSERT INTO details (reg_no, fname, lname, date, age, address, gender, email, Ph_no, Education, Course)
VALUES ('$reg_no', '$fname', '$lname', '$date', '$age', '$address', '$gender', '$email', '$Ph_no', '$Education', '$Program' )";

if (mysqli_query($conn, $sql)) {
  echo "Your Record Inserted successfully";
  }
  else{
      echo "Error! " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?> 

