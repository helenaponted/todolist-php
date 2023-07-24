<?php include("todoList.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <title> PHP TODO</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style> 
    .subrayado{
        text-decoration: line-through;
    }

</style>
</head>
<body>
  <header>
  </header>

  <main class="container">
    <br/>
<div class="card">
    <div class="card-header">
       Todo list 
    </div>
    <div class="card-body">

          <div class="mb-3">
            <form action="" method="post">
               <label for="task" class="form-label">Task:</label>
               <input type="text"
                   class="form-control" 
                   name="task" 
                   id="task" 
                   aria-describedby="helpId" 
                   placeholder="Create task">
                <br/>
                <input name="add-task" 
                   id="add-task" 
                   class="btn btn-primary" 
                   type="submit" 
                   value="Summit">
             </form>
           </div>

           

<ul class="list-group">

<?php foreach($registros as $registro){?>
    
    <li class="list-group-item"> 
      <input class="form-check-input float-start" 
              type="checkbox" 
              value="" 
              id="" 
              <?php echo ($registro['completed']==1)?'checked':''; ?>> 
              &nbsp; &nbsp; <span class="float-start <?php echo ($registro['completed']==1)?'subrayado':''; ?> "> &nbsp; <?php echo $registro['task'];?></span>
              
            <h6 class="float-start">
               &nbsp; <a href="?id=<?php echo $registro['id'];?>"><span class="badge bg-danger"> x </span>
            </h6>
    </li>

<?php } ?>

</ul>

      

    </div>
    <div class="card-footer text-muted">
       
    </div>
</div>
  </main>
  <footer>
   
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
</body>

</html>