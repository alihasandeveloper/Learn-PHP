<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    echo '<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
           </div>';
    // Database Connection
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "contactus";


    //Create a connection

    $conn = mysqli_connect($servername, $username, $password, $dbname);


//    if (!$conn) {
//
//    }
    echo "<h2>Your Email is $email And Your Password is $password</h2>";
}

?>


<form action="/get-post-request.php" method="post">
    <div>
        <label for="email">Type your email</label> <br>
        <input type="email" name="email" id="email" placeholder="type your email"
               style="padding: 8px 16px; margin-top: 10px">
    </div>
    <div style="margin-top: 10px">
        <label for="pass">Type your email</label> <br>
        <input type="password" name="pass" id="pass" placeholder="type your pass"
               style="padding: 8px 16px; margin-top: 10px">
    </div>
    <button type="submit"
            style="padding: 10px 20px; background: rebeccapurple; color: #fff; margin-top: 10px; border: none">Submit
    </button>
    <button type="reset"
            style="padding: 10px 20px; background: rebeccapurple; color: #fff; margin-top: 10px; border: none"><a
                href="/learn-PHP/get-post-request.php" style="text-decoration: none; color: white">Reset</a></button>
</form>