<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $phnum = $_POST['phnum'];
    $email = $_POST['email'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(first_name, last_name, gender, phnum, email)
        values(?, ?, ?, ?, ?)"); 
        $stmt->bind_param("sssis",$first_name, $last_name, $gender, $phnum, $email);
        $stmt->execute();
        echo "Registration Successfull";
        $stmt->close();
        $conn->close();
    }
?>
<h3>Ur mom will be redirected in 3 seconds</h3>
<script>
    window.onload = (() => {
        console.log("loaded")
        setTimeout(() => {
            window.location.href = '/php-practice'
        }, 3000)
    })
</script>