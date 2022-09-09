<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Registration</title>
</head>

<body>


    <section class="text-center p-5">
        <div class="container-fluid">

            <?php
                if(isset($_SESSION['username'])) {
                    echo "
                    <div>
                    <p>".$_SESSION['username']."</p>
                     <a href='include/logout.inc.php?status=delete' class='btn btn-large btn-danger'>Log Out</a>
                    </div>";
                }
                else{
                    echo ' <button class="btn btn-large btn-primary" data-bs-toggle="modal" data-bs-target="#signin">Sign</button>';
                }
            ?>
           
        </div>
    </section>



    <div class="modal fade position-absolute" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body my-2">

                    <form action="include/login.inc.php" method="post" class="signIn">
                        <div class="mb-3">
                            <label for="user_login" class="col-form-label mb-2">User:</label>
                            <input type="text" name="uid" class="form-control" placeholder="User Id or Email" id="user_login" required>
                        </div>

                        <div class="mb-3">
                            <label for="user_password" class="col-form-label mb-2">Password:</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Password" id="user_password" autocomplete="off" required>
                        </div>

                        <button type="submit" name='submit' class="btn btn-primary mt-3 p-1" id="login_submit">Submit</button>


                        <div class="modal_login">

                        </div>

                    </form>
                </div>
                <div class="modal-footer modal_sign">
                    <button type="button" class="btn btn-secondary me-3 mt-3 p-1" data-bs-dismiss="modal">Close</button>


                </div>

                <button type="button" class="btn btn-link mt-3" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</button>
            </div>
        </div>
    </div>




    <div class="modal fade position-absolute" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body my-2">

                    <form action="include/signup.inc.php" method="post" class="signUp">
                        <div class="mb-3">
                            <label for="name" class="col-form-label mb-2">Username:</label>
                            <input type="text" name="uid" class="form-control" placeholder="User Name" id="name" required>
                        </div>

                        
                        <div class="mb-3">
                            <label for="email" class="col-form-label mb-2">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" id="email" required>
                            <div id="email_field" class="mt-2"></div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="col-form-label mb-2">Password:</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Password" id="password" autocomplete="off" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rep_password" class="col-form-label mb-2">Repeat Password:</label>
                            <input type="password" name="pwdRepeat" class="form-control" placeholder="Repeat Password" id="rep_password" autocomplete="off" required>
                            <div id="rep_password_field" class="mt-2"></div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary mt-3 p-1" id="signup_submit" name="submit">Submit</button>

                        <div class="modal_signup">

                        </div>
                    </form>
                </div>
                <div class="modal-footer modal_sign">
                    <button type="button" class="btn btn-secondary me-3 mt-3 p-1" data-bs-dismiss="modal">Close</button>


                </div>

                <button type="button" class="btn btn-link mt-3" data-bs-toggle="modal" data-bs-target="#signin">Sign In</button>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>