<?php
$name=$email =$gender=$comment =$website ="";
if
($_SERVER ["REQUEST_METHOD"]=="POST"){
$name =test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$website=test_input($_POST["website"]);
$comment =test_input($_POST["comment"]);
$gender=test_input($_POST["gender"]);

}
function test_input ($data)
{
    $data =trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>
<?php
echo "<h2>your input:</</h2>";
echo $name;
echo"<br>";
echo$email;
echo"<br>";
echo$website;
echo"<br>";
echo$comment;
echo"<br>";
echo$gender;
echo"<br>";
?>