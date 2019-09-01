<?php
    $username=$_POST['uname'];
    $password=$_POST['psw'];

    $username=stripslashes($username);
    $password=stripslashes($password);
    $username=mysql_real_escape_string($username);
    $password=mysql_real_escape_string($password);

    mysql_connect("localhost","root","");
    mysql_dbselect_db("portal");

    $res=mysql_query("select * from register where username = '$username' and '$password'")or 
                    die("Failed to query database ".mysql_error());
    $row=mysql_fetch_array($res);
    if($row['username']==$username && $row['password']==$password)
    {
        echo "Login successful Welcome".$row ['username'];
    }
    else{
        echo "Login failed.";
    }

?>