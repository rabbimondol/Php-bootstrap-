<?php include('login.php');
include('config.php');
if(isset($_POST['update_id'])){
$id = $_POST['update_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "UPDATE 'users' SET name='$name',email='$email' WHERE id='$id' ";
mysqli_query($conn,$sql);    
 
}










?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div><div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>

  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Send it !</button>
      </div>
  
</form>
      </div>
      
    </div>
  </div>
</div>
<!--   ##############################################################-->
<!--
   <div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit.php" method="post">
  <div class="form-group">
   <input type="hidden" name="update" id="update">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    
  </div><div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>

  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
      </div>
  
</form>
      </div>
      
    </div>
  </div>
</div>
   
-->
 
   
   
   
   
   
   
   
   
   
   
   

    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h3>Bootstrap model with php</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add Data
</button>
</div>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
     
    </tr>
  </thead>
  <?php foreach($pizza as $pizza){ ?>
  <tbody>
    <tr>
      <th><?php echo $pizza['id'] ?></th>
      <td><?php echo $pizza['name'] ?></td>
      <td><?php echo $pizza['email'] ?></td>
      <td><a class="btn btn-primary" href="edit2.php?id=<?php echo $pizza['id'] ?>">
      
Edit
</a></td>
     <td><a class="btn btn-primary" href="edit.php?id=<?php echo $pizza['id'] ?>">Delete</a></td>
      
    </tr>
    
  </tbody>
  <?php }?>
</table>
    </div>
</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
 $(document).ready(function(){
 $('.btn-edit').click(function(){
 $('#editmodel').modal('show');
 
 })
 
 
 
 
 
 
 })   
    
    
    
    
    
    
    
    
    
    
    
    
</script>
</html>