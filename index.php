<?php
// connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


// Create a connection


// Die if connection was not successful
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $title = $_POST['title'];
     $description = $_POST['description'];

     //Sql query to be executed
    $sql = "INSERT INTO `notes` ( `title`, `description`) VALUES ('$title', '$description');";
    $result = mysqli_query($conn, $sql);
    if($result) {
        $insert = true;
    }
    else {
        $insert = false;
        echo "New record created unsuccessfully" . mysqli_error($conn);
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>!Notes - A simple note solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">!Notes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-white text-white" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="container my-4">
    <form action="/learn-PHP/crud/index.php" method="post">
        <h2>Add a note</h2>
        <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
            <input type="text" class="form-control" id="title" name="title" ">
        </div>
        <div class="mb-3">
            <label for="descf">Comments</label>
            <textarea class="form-control" placeholder="Add a note" id="descf" name="description"
                      style="height: 100px"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
</div>

<div class="container">


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Sn</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Time</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM notes";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
//            echo $row['sn'] . ' '.$row['title']. ' ' . $row['description'];
            echo "<tr>
      <th scope='row'>" . $row['sn'] . "</th>
      <td>" . $row['title'] . "</td>
      <td>" . $row['description'] . "</td>
      <td>" . $row['tstamp'] . "</td>
      <td>@Action</td>
    </tr>";
        }
        ?>
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>