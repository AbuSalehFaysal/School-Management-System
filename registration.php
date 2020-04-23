<?php 

    include_once "classes/admins/admin.php";
    $obj = new Admin;
 ?>



<!DOCTYPE html>
<html lang="en" class=" ">


<head>
    <meta charset="utf-8" />
    <title>School Management System</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    
</head>

<body class="">





    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Create an account</a>
            <section class="m-b-lg">


                <?php 

                    if ( isset($_POST['submit']) ) {
                         # code...
                        //data
                        $uname = $_POST['uname'];
                        $email = $_POST['email'];

                        //pass
                        $pass = $_POST['pass'];
                        $hash_pass = password_hash($pass, PASSWORD_DEFAULT);


                        //agree
                        if ( isset($_POST['user_agree']) ) {
                            # code...
                            $agree = true;
                        } else {
                            # code...
                            $agree = false;
                        }
                        

                        if ( empty($uname) || empty($email) || empty($pass) ) {
                            # code...
                            $mess = "<p class='alert alert-danger'>Please, fill the form properly!<button class='close' data-dismiss='alert'>&times;</button></p>";
                        }elseif ( $agree == false ) {
                            # code...
                            $mess = "<p class='alert alert-danger'>Please, Agree the terms and policy!<button class='close' data-dismiss='alert'>&times;</button></p>";
                        } else {
                            # code...
                            $obj -> adminRegistration($uname, $email, $hash_pass);
                        }
                        


                     } 



                 ?>


                 <div class="mess">
                <?php  

                    if( isset($mess) ){
                        echo $mess;
                    }

                ?>
                </div>


                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">


                    <div class="list-group">
                        
                        <div class="list-group-item">
                            <input name="uname" placeholder="Username" type="text" class="form-control no-border"> 
                        </div>
                        <div class="list-group-item">
                            <input name="email" type="email" placeholder="Email" type="text" class="form-control no-border"> 
                        </div>
                        <div class="list-group-item">
                            <input name="pass" type="password" placeholder="Password" type="password" class="form-control no-border"> 
                        </div>
                    </div>


                    <div class="checkbox m-b">
                        <label>
                            <input name="user_agree" value="agree" type="checkbox"> Agree the <a href="#">terms and policy</a> </label>
                    </div>


                    <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>


                    <div class="line line-dashed"></div>


                    <p class="text-muted text-center"><small>Already have an account?</small></p> <a href="index.php" class="btn btn-lg btn-default btn-block">Sign in</a> 
                </form>





            </section>
        </div>
    </section>



















    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>