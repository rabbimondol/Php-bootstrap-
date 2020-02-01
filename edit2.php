<?php 
include('config.php');
$name = $email = '';
if(isset($_GET['id'])){
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$pizza = mysqli_fetch_assoc($result);    

}
if(isset($_POST['edit'])){
$id_to_edit = $_POST['id_to_edit'];
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "UPDATE users SET name='$name',email='$email' WHERE id='$id_to_edit'";  
$result = mysqli_query($conn,$sql);
if($result){
header('Location:index.php');
}
    else{
    mysqli_error($conn);
    
    
    }

}
if(isset($_POST['Cancel'])){
header('Location:index.php');

}







?>





<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<form action="edit2.php" method="post">
<div class="col-md-6 offset-md-4">
 <input type="hidden" name="id_to_edit" value="<?php echo $pizza['id'] ?>">
 <div class="form-group">
 <label>Name</label>
 <input type="text" name="name" placeholder="name" class="form-control" value="<?php echo $pizza['name'] ?>">     
 </div>
 <div class="form-group">
 <label>Email</label>
 <input type="text" name="email" placeholder="email" class="form-control" value="<?php echo $pizza['email'] ?>">     
 </div>
 <input type="submit" name="edit" value="edit" class="btn btn-primary">
  <input type="submit" name="Cancel" value="Cancel" class="btn btn-danger">
  </div> 
</form>
<form action="edit2.php" method="post">
  
    
    
</form>






























