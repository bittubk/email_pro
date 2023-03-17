<?php
// include('book.php');
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "BITTUk!@#123";
$dbname = "BeanToCup";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  echo"<br>not connenterd";
}
else{
  echo"<br>conn enterd<br>";
}
// Create bookings table
// $stmt = "CREATE TABLE booking (
//     -- id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     -- phone_number VARCHAR(20) NOT NULL,
//     date DATE NOT NULL,
//     time VARCHR(46) NOT NULL,
//     e_type VARCHAR(37) NOT NULL,
//     count VARCHAR(37) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//     )";
    
//     if (mysqli_query($conn, $stmt)) {
//         echo "Table booking created successfully";}
// else{
//   echo"table not created";
// }
// Retrieve form data
$name = $_POST['name'];
$email =$_POST['email'];
$date =$_POST['date'];
$time =$_POST['time'];

$e_type =$_POST['e_type'];
$count =$_POST['count'];
// // Insert data into the database
echo $name." ".$email." ".$date." ".$time." ".$e_type." ".$count;
$stmt =$conn->prepare("INSERT INTO booking(`name`,`email`,`date`,`time`,`e_type`,`count`) VALUES ('$name','$email','$date','$time','$e_type','$count')");
// if($stmt){
// echo"su";
// }
// else{
//   echo"n";
// }



$stmt->execute();

if($stmt->affected_rows > 0){
  echo '<script>alert("data inserted")</script>';
}else{
  echo '<script>alert("data is no inserted")</script>';
}
 ?>
// <?php
// if(!empty($_POST["submit"])) {
//   $name = $_POST["name"];
//   $email =$_POST["email"];
//   $date =$_POST["date"];
//   $time =$_POST["time"];
//   $e_type =$_POST["e_type"];
//   $count =$_POST["count"];
//     // Set email recipient and subject
//     $toemail = "bittukumarj2580@gmail.com";
//     // $subject = "New message from your website";
    
//     // Set email headers
//     // $headers = "From: " . $name . "<" . $email . ">\r\n";
//     // $headers .= "Reply-To: " . $email . "\r\n";
//     // $headers .= "Content-type: text/html\r\n";
//     $headers ="Name :" .$name.
//     "\r\n email:".$email.
//     "\r\n date:".$date.
//     "\r\n time:".$time.
//     "\r\n e_type:".$e_type.
//     "\r\n count:".$count."\r\n";
//     if(mail($toemail,$name,$headers)){
//       $massage="
//       your data is send succesfully";
    
//     // Construct email message
//     // $message_body = "<strong>Name:</strong> " . $name . "<br>";
//     // $message_body .= "<strong>Email:</strong> " . $email . "<br>";
//     // $message_body .= "<strong>Message:</strong><br>" . $message;
    
//     // Send email
//     // if(mail($to, $subject, $message_body, $headers)) {
//         echo "Thank you for contacting us!";
//     } else {
//         echo "Error sending message.";
//     }
// }
// else{
//   echo"<br>error";
// }
// ?>







<!-- 
// Retrieve form data
$full_name = $_POST['name'];
$email =$_POST['email'];
$event_date =$_POST['date'];
$event_time =$_POST['time'];
$event_type =$_POST['e_type'];
$guest_count =$_POST['count'];
// Insert data into the database
$sql ="INSERT INTO bookings (name,email,date,time,type,count) VALUES ('$full_name', '$email', '$event_date', '$event_time', '$event_type', '$guest_count')";

if (mysql_query($conn, $sql)) {
  echo "Data inserted successfully<br>";
  echo"thanks for inserting data";
} else {
  echo "Error: ";// . $sql . "<br>" . mysqli_connect_error($conn);
}
// replace table_name with the name of your table
$sql = "SELECT * FROM bookings";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "column1: " . $row["column1"]. " - column2: " . $row["column2"]. " - column3: " . $row["column3"]. "<br>";
    }
} else {
    echo "0 results";
}


// Close the database connection
mysqli_close($conn);
?> -->
