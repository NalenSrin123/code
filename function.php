<?php 
    $con= new mysqli('localhost','root','','db_php_6_7'); // using  connect to database
    // if($con==true){
    //     echo 'Hello';
    // }
    if(isset($_POST['btnSubmit'])){
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $cpass=$_POST['cpassword'];
        global $con;
        $sql="INSERT INTO user( `userName`, `email`, `password`, `confirm_password`) 
             VALUES ('$uname','$email','$pass','$cpass')";
        $data=$con->query($sql);
    }
     
    function getUser(){
        global $con;
        $sql="SELECT * FROM user";
        $result=$con->query($sql);
       while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$row['userName'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['password'].'</td>
                    <td>'.$row['confirm_password'].'</td>
                 </tr>';
            }
       }
?>