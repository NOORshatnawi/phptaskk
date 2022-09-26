<?php
require_once './Patients.php';

$id = $_GET["ID"];
$sql = "delete from patients where ID = :ID";
$query = $conn->prepare($sql);
$query->bindParam(":ID", $id, PDO::PARAM_STR);
$query->execute();
header("Location: add.php");