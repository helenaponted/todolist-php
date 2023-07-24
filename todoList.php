<?php

try{
    $conn= new PDO('mysql:host=localhost;dbname=todos','root','');
}catch(PDOException $e){
    echo "Error de conexión: ";
}

// Añadir task
if(isset($_POST['add-task'])){

    $task=($_POST['task']);
    $sql='INSERT INTO tasks (task) VALUE(?)';
    $sentencia= $conn->prepare($sql);
    if ($sentencia->execute([$task])){
    }else{
        $errorInfo= $sentencia->errorInfo();
        echo "error: " . $errorInfo[2];
    }
}

// Borrar task por ID
if(isset($_GET['id'])){

    $id=$_GET['id'];
    $sql="DELETE FROM tasks WHERE id=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$id]);

}


$sql="SELECT * FROM tasks";
$registros=$conn->query($sql);



?>