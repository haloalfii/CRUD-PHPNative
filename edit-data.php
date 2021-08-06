<?php
include_once "proses.php";
$crud = new CRUD;
if (isset($_POST['submit'])) {
    $update = $crud->UpdateData($_POST['CustomerID'], $_POST['Name'], $_POST['Address'], $_POST['City'], $_POST['PostCode'], $_POST['Country']);
    if ($update) {
        echo "<script>alert('Data berhasil diupdate');window.location = 'index.php';</script>";
    }
}

$id = $_GET['CustomerID'];
$data = $crud->GetByIdData($id);
foreach ($data as $data) {
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
            <h2>Edit PHP-Native</h2>
            <p>Edit dengan menggunakan Php Native</p>
            <div class="container">
                <form class="needs-validation" method="post" novalidate="">

                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="CustomerID">CustomerID</label>
                            <input type="text" class="form-control" id="CustomerID" value="<?= $data['CustomerID'] ?>" name="CustomerID" required="">
                            <div class="invalid-feedback">Please provide a valid NPM.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="Name" value="<?= $data['Name'] ?>" name="Name" required="">
                            <div class="invalid-feedback">Please provide a valid NPM.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" value="<?= $data['Address'] ?>" name="Address" required="">
                            <div class="invalid-feedback">Please provide a valid Nama Mahasiswa.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="City">City</label>
                            <input type="text" class="form-control" id="City" value="<?= $data['City'] ?>" name="City" required="">
                            <div class="invalid-feedback">Please provide a valid Email.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="PostCode">Postal Code</label>
                            <input type="text" class="form-control" id="PostCode" value="<?= $data['PostCode'] ?>" name="PostCode" required="">
                            <div class="invalid-feedback">Please provide a valid No Hp.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" id="Country" value="<?= $data['Country'] ?>" name="Country" required="">
                            <div class="invalid-feedback">Please provide a valid Password.</div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    <?php
}
    ?>
    </body>

    </html>