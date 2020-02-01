<?php 
include ('config.php');
$errors = array('email'=>'','name'=>'','password1'=>'','password2'=>'','match'=>'');
$name = $email = '';
$pizza['name'] = $pizza['email'] = '';

if(isset($_POST['submit'])){
//for email filter    
 if(empty($_POST['email'])){
 $errors['email']="Email is required";
 }else{
 $email = $_POST['email'];
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 $errors['email']="Please Input a validated email";
 }
 }
//for name 
if(empty($_POST['name'])){
 $errors['name']= "Name is required";
 }else{
 $name = $_POST['name'];
 if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
 $errors['name']= "Please Input a validated name";
 }
 }
  
 
//check if the email alredy taken
$sql = "SELECT * FROM users WHERE email = '$email' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
$errors['match'] = "Email is already taken";
}    
// array filter to send data
 if(array_filter($errors)){
 // if have some error
 }else{
 $name = mysqli_real_escape_string($conn,$_POST['name']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);   
 $sql = "INSERT INTO users(name,email) VALUE('$name','$email')";
 mysqli_query($conn,$sql);
 header('Location:index.php');
 }
 
    
    
    
    
   


}
$sql = 'SELECT id,name,email FROM users';
$results = mysqli_query($conn,$sql);
$pizza = mysqli_fetch_all($results,MYSQLI_ASSOC);
mysqli_free_result($results);
mysqli_close($conn);
?>