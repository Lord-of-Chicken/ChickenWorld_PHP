<?php
  include 'db.php';
  $id = $_GET['id'];
  $sql = "delete from ChickenMessages where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: message.php");
?>
