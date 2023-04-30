<?php
    $n=$_POST["name"];
    $ln=$_POST["lname"];
    $bi=$_POST["birthday"];
    $g=$_POST["genre"];
    $a=$_POST["adress"];
    $c=$_POST["city"];
    $na=$_POST["nationality"];
    $co=$_POST["country"];
    $e=$_POST["email"];
    $p=$_POST["ph_number"];
    $s=$_POST["salary"];
    $pos=$_POST["position"];
    $hi=$_POST["high"];
    $r1=$_POST["res1"];
    $uni=$_POST["uni"];
    $r2=$_POST["res2"];
    if(!$n || !$ln || !$bi || !$g || !$a || !$c || !$na || !$co || !$e || !$p || !$s || !$pos || !$hi || !$r1 || !$uni || !$r2)
        echo "<font size=7>Incorrect data";
    else{

        $server="localhost";
        $user="root";
        $password="";
        $db="atestat_info";
        $conn=new mysqli($server,$user,$password,$db);
        if(!$conn)  echo "I can't reache server";
        else{
            $aa="INSERT INTO n_emp VALUES ('$n','$ln','$bi','$g','$a','$c','$na','$co','$e','$p','$s','$pos','$hi','$r1','$uni','$r2')";
            $conn->query($aa);
            if(!$conn)
                echo "<font size=7>It's a problem with the server. Please try again later";
            else
                echo "<font size=7>Your form has been submit.";
                header('Location: employ_form.html');
        }
    }
?>