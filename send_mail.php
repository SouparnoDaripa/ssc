<?php
session_start(); 
include('db_con.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$uniq_id = $_POST['uid'];

$sql = "INSERT into customer (name, email, phone, address, uniq_id, date_of_req) values ('$name', '$email', '$phone', '$address', '$uniq_id', now())";
$query = mysqli_query($db_conx, $sql);
$_SESSION = array();
session_destroy();
// $i=1;
// $print="";
// while($i<19){
// $sql = "SELECT * from category where type_id = '$i' LIMIT 1";
// $query = mysqli_query($db_conx, $sql);
// $row = mysqli_fetch_array($query);
// $type = $row[1];

// $sql = "SELECT c.id, c.uniq_id, c.type_id, i.item_name from choice c INNER JOIN item i on c.item_id = i.id where c.uniq_id = '$uniq_id' AND c.type_id = '$i'";
// $query = mysqli_query($db_conx, $sql);
// $num_rows = mysqli_num_rows($query);

// if($num_rows > 0){
//   $print .= '<div class="category'.$i.'">
//           <h3>'.$type.'</h3>
//           <p>';
//   while($row = mysqli_fetch_array($query)){
//     $print .=$row[3].', ';
//   }
//   $print = chop($print, ", ");
//   $print .='</p> </div>';
// }
// $i++;
// }
// $message = $print;

// $to = 'daripa.souparno@gmail.com';
// $message = 'FROM: '.$name.' Email: '.$email.' Message: '.$message;
// $headers = 'From: daripa.souparno@gmail.com' . "\r\n";
 
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
// //mail($to, $subject, $message, $headers); //This method sends the mail.
// echo "success"; // success message
// }else{
// echo "Invalid Email, Please provide a correct Email.";
// }

echo "success";
?>