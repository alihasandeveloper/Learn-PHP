<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $useremail = $_POST["email"];
    $message = $_POST["message"];
//Set db value
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "contactus";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {

        $sql = "INSERT INTO `information` ( `name`, `email`, `description`) VALUES ( '$username', '$useremail', '$message');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="p-4 mb-4 text-sm text-green-800  bg-green-50  " role="alert">
                  <span class="font-medium">Success alert!</span>Your entry has been submited successfully.
                  </div>';
        } else {
            echo '<div class="p-4 mb-4 text-sm text-red-800  bg-red-50  " role="alert">
                 <span class="font-medium">Error</span>We have some technical issues. Please try again later.
                 </div>'.mysqli_error($conn);
        }
    }
}



?>


<form class="max-w-sm mx-auto" action="/Learn-PHP/from_to_database.php" method="post">
    <h2 class="text-3xl mb-3">Place type your info</h2>
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your name</label>
        <input type="text" name="name" id="name"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
               placeholder="Input your name" required/>
    </div>
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
        <input type="email" name="email" id="email"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
               placeholder="Input your email" required/>
    </div>

    <div class="mb-5">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Type something!</label>
        <textarea id="message" name="message"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "></textarea>
    </div>

    <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center   ">
        Submit
    </button>
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center   ">
        <a href="http://localhost/Learn-PHP/from_to_database.php">Reset</a></button>
</form>

</body>
</html>