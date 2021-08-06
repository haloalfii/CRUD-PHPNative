<?php
include_once "proses.php";
$crud = new CRUD;

if (isset($_POST['submit'])) {
    $CustomerID = $_POST['CustomerID'];
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $PostCode = $_POST['PostCode'];
    $Country = $_POST['Country'];

    $add_status = $crud->AddData($CustomerID, $Name, $Address, $City, $PostCode, $Country);
    if ($add_status) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                location='index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD PHP-Native</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <br />
        <br />
        <br />
        <h2>Input Data PHP-Native</h2>
        <p>Input Data dengan menggunakan Php Native</p>
        <div class="container">
            <form class="needs-validation" method="post" novalidate="">

                <div class="form-row">
                    <div class="col-md-6 mb-10">
                        <label for="CustomerID">CustomerID</label>
                        <input type="text" class="form-control" id="CustomerID" placeholder="Input Customer ID" name="CustomerID" required="">
                        <div class="invalid-feedback">Input Valid CustomerID</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-10">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" placeholder="Input Name" name="Name" required="">
                        <div class="invalid-feedback">Input Valid Name</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-10">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" id="Address" placeholder="Input Address" name="Address" required="">
                        <div class="invalid-feedback">Input Valid Address</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-10">
                        <label for="City">City</label>
                        <input type="text" class="form-control" id="City" placeholder="Input Valid City" name="City" required="">
                        <div class="invalid-feedback">Input Valid City</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-10">
                        <label for="PostCode">Postal Code</label>
                        <input type="text" class="form-control" id="PostCode" placeholder="Input PostCode" name="PostCode" required="">
                        <div class="invalid-feedback">Input Valid PostCode</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-10">
                        <label for="Country">Country</label>
                        <input type="text" class="form-control" id="Country" placeholder="Input Country" name="Country" required="">
                        <div class="invalid-feedback">Input Valid Country</div>
                    </div>
                </div>
                <br>
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>