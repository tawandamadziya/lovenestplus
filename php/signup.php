<?php
//  echo "Hello World"

$firstname = $_POST['firstname']
$dateofbirth = $_POST['dateofbirth']
$gender = $_POST['gender']
$email = $_POST['email']
$Passions = $_POST['Passions']
$Relationship = $_POST['Relationship']

//database connection
$conn= new mysqli('localhost', 'root', '', 'lovenestDB');
if($conn->connect_error){
    die('Connection failed: ' . $conn->error);
}else{
    $stmt = $conn->prepare("insert into registeration(firstname, dateofbirth, gender, email, Passions, Relationship) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$firstname,$dateofbirth,$gender,$email,$Passions,$Relationships);
    $stmt->execute();
    echo "You have successfully signed up to Love Nest";
    $stmt->close();
    $conn->close();
}
?>