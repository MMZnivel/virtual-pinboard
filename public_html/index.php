<h1>Test 1 2 ...</h1>

<?php
echo "<h1>... 3. Ok</h1>";
$host = '127.0.0.1:3306';
$user = 'first-class-access';
$pass = '1DasManSichMerkenKann.Bitte?';
echo "<h4> mysql is not configured, expecting warning for \"mysqli::__construct()\".</h4>";
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
// phpinfo();
?>
