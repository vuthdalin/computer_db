<?php
$con = new mysqli('localhost', 'root', '', 'MYDB');

function getpro() {
    global $con;
    $mysql = "SELECT * FROM `computer`";
    $result = $con->query($mysql);

    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-4 ">
            <div class="card bg-secondary">
                <h5 class=" p-2 img-fluid">' . $row['name'] . '</h5>
                <img src="../image/' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '">
                <div class="card-body bg-secondary d-flex justify-content-between">
                    <h5>' . $row['memory'] . '</h5>
                    <button class="btn btn-danger">Add to cart</button>
                </div>
            </div>
        </div>';
    }
}
?>
