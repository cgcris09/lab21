<html><head>
<?php
// Create connection object
$user = "ccardenas2";  
$conn = mysqli_connect("localhost",$user,$user,$user);
// Check connection
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if (isset($_POST['choice']))
{
    $choice = $_POST['choice'];
    if ($choice == "Enter")
    {
    $stmt = $conn->prepare("INSERT INTO madlib SET first=?, 
                                     second=?, 
                                     third=?,
                                     fourth=?,
                                     fifth=?,
                                     sixth=?,
                                     seventh=?,
                                     eighth=?,
                                     ninth=?,
                                     tenth=?");
    $stmt->bind_param("ssssssssss", $first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth, $ninth, $tenth);

    $first=$_POST['first'];
    $second=$_POST['second'];
    $third=$_POST['third'];
    $fourth=$_POST['fourth'];
    $fifth=$_POST['fifth'];
    $sixth=$_POST['sixth'];
    $seventh=$_POST['seventh'];
    $eighth=$_POST['eighth'];    
    $ninth=$_POST['ninth'];
    $tenth=$_POST['tenth'];

    $stmt->execute();

    }
}
?>
</head>
<body>

<form method='POST'>
<br>Noun:<input type='text' name='first'>
<br>Name:<input type='text' name='second'>
<br>Plural Noun:<input type='text' name='third'>
<br>Adjective:<input type='text' name='fourth'>
<br>Verb:<input type='text' name='fifth'>
<br>Verb (Past Tense):<input type='text' name='sixth'>
<br>Adjective:<input type='text' name='seventh'>
<br>Adjective:<input type='text' name='eighth'>
<br>Place:<input type='text' name='ninth'>
<br>Verb:<input type='text' name='tenth'>

<br><input type='submit' name='choice' value='Enter'>
</form>

</body>
</html>
