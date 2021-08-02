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
    <h2>CRUD PHP-Native</h2>
    <p>CRUD dengan menggunakan Php Native</p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Address</th>
          <th>City</th>
          <th>Post Code</th>
          <th>Country</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $number = 1;
        include_once "proses.php";

        $crud = new CRUD;
        $row = $crud->GetData();
        foreach ($row as $row) {
        ?>
          <tr>
            <td><?php echo $number++ ?></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Address'] ?></td>
            <td><?php echo $row['City'] ?></td>
            <td><?php echo $row['PostCode'] ?></td>
            <td><?php echo $row['City'] ?></td>
            <td>
              <button type="button" class="btn btn-outline-warning">Edit</button>
              <button type="button" class="btn btn-outline-danger">Delete</button>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <button type="button" class="btn btn-outline-success">Input Data</button>
  </div>

</body>

</html>