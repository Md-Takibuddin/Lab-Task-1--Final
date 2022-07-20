<?php

$conn="";
class database{

    function openCon(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lab_task";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function InsertData($fname,$lname,$age, $designation,$planguage,$email,$password,$picture,$conn){
        $sqlstr="INSERT INTO employee (fname,lname,age,designation,planguage,email,password,picture)
        VALUES ('$fname','$lname',$age,'$designation','$planguage','$email','$password','$picture')";
        if($conn->query($sqlstr)===TRUE){
        
        echo "Data Inserted";
    
        
        }
        else{
            echo "cant insert".$conn->error;
        }


    }
    function show($conn){
        $sql="SELECT * FROM employee";
        return $conn->query($sql);
    }
    


   
}



?>