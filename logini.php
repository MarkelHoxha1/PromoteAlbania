 <?php 
include 'dbcon.php';
if(isset($_POST['submit']))
        {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $pass = md5($password);
               
                 if($username== ""&& $password=="")//kontollojme nese fushat jane bosh
                                
                        {
                                echo "<script>alert('Please fill up the form!')</script>";
                        }
                        else
                        {
                        $check = "SELECT * FROM user where Username = '$username' and Password = '$pass'";
                        $check_q = $mysqli->query($check);
                        if(mysqli_num_rows($check_q)>0)
                        {
                                while($row = $check_q->fetch_assoc())
                                {
                                        session_start();
                                        $_SESSION['UserID'] = $row['UserID'];
                                        $_SESSION['Type'] =  $row['Type'];


                                                if($_SESSION['Type']=="User")
                                                {
                                                        header('location: bootstrap1.php');
                                              }
                                                elseif ($_SESSION['Type']=="Admin") 
                                                {
                                                        header('location:Admin.php');
                                                        
                                                }
                                                elseif ($_SESSION['Type']=="Admin_Agjensie") 
                                                {
                                                       
                                                        header('location:Admin_Agjensie.php');
                                                }

                                }
                        }
                        else
                        {
                             echo "<script>alert('Invalid username or password!')</script>";
                             // header('location: Login.php');    
                        }
}
                       
                
                        
                        
                }



                ?>