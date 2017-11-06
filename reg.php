<?php
include 'connection.php';
$test = '';
if($_POST)
{
    $firstname    = mysql_real_escape_string($_POST['firstname']);
    $lastname    = mysql_real_escape_string($_POST['lastname']);
    $email     = mysql_real_escape_string($_POST['email']);
    $password  = mysql_real_escape_string($_POST['password']);
    $confirmpassword  = mysql_real_escape_string($_POST['confirmpassword']);
   
    //password_hash see : http://www.php.net/manual/en/function.password-hash.php
    $password   = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 11));
   
    try
    {
        $stmt = $db_con->prepare("SELECT * FROM user WHERE email=:email");
        $stmt->execute(array(":email"=>$email));
        $count = $stmt->rowCount();
       
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO user(first_name,last_name,email,password,confirm_password) VALUES( :fname,:lname, :email, :password, :confirmpassword)");
            $stmt->bindParam(":uname",$firstname);
            $stmt->bindParam(":lname",$lastname);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":password",$password);
            $stmt->bindParam(":confirmpassword",$confirmpassword);

            if($stmt->execute())
            {
                echo "registered";
            }
            else
            {
                echo "Query could not execute !";
            }

        }
        else{

            echo "1"; //  not available
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>
