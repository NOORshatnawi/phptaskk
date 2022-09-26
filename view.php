<?php
$pageTitle = "View Page";
require_once './Patients.php';

$id = $_GET["id"];

$sql = "select * from patients where id = :id";
$query = $conn->prepare($sql);
$query->bindParam(":id", $id, PDO::PARAM_STR);
$patient = $query->execute();
$patient = $query->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">



<body>

    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-4">
                <h1>View Patient</h1>
            </div>
            <div class="col-md-4">
                <a href="./index.php" class="btn btn-primary">Back to home</a>
            </div>
        </div>

        <div class="card" style="width: 36rem;">
            <div class="card-header">
                <h2>Patient Name : <?php echo $patient->Name ?></h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Patient Age : <?php echo $patient->Age ?></li>
                <li class="list-group-item">Patient Address : <?php echo $patient->Address ?></li>
            </ul>
            <div class="card-footer">
                Patient Id : <?php echo $patient->id ?>
            </div>
        </div>

    </div>


</body>

</html>