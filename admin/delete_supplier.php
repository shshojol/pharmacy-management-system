<?php 
include('include/db_conn.php');
$id = $_GET['id'];
$sql = 'delete from suppliers where id ='.$id;
if(mysqli_query($conn, $sql)){
    echo "<script>
            alert('delete Succesfully');
            window.location.href = 'manage_supplier.php';
            </script>"; 
}