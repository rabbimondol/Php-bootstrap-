<?php 
include('config.php');

if(isset($_POST['delete'])){
$id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
$sql = "DELETE FROM users WHERE id='$id_to_delete'";
if(mysqli_query($conn,$sql)){
header('Location:index.php');
}else{
mysqli_error($conn);

}   



}
if(isset($_GET['id'])){
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$pizza = mysqli_fetch_assoc($result);    
    
    


}

















?>
<form action="edit.php" method="post">
<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
   <input type="submit" name="delete" value="delete">    
    
</form>