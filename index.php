<html>
<body bgcolor="#ffffCC">
<center>
<h1><?php
$f_usr= $_POST["userid"];
$f_pswd= $_POST["password"];
$con=mysql_connect("localhost","root","");
if(! $con)
{
        die('Connection Failed'.mysql_error());
}
mysql_select_db("phpdata",$con);
$result=mysql_query("select * from login1");
while($row=mysql_fetch_array($result))
{
    if($row["username"]==$f_usr && $row["password"]==$f_pswd)
        echo file_get_contents('loginsuccess.html');
    else
        echo"Sorry : $f_usr";
}
?>
</h1>
</center>
</body>
</html>