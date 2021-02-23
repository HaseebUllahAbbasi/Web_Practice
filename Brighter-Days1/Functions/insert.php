<?php
                           if(isset(filter_input(INPUT_POST,'submit'))){
                             
                           include 'connect.php';
                           $first_name = mysqli_real_escape_string($conn,INPUT_REQUEST['fname']);
                           $surname = mysqli_real_escape_string($conn, INPUT_REQUEST['sname']);
                           $email = mysqli_real_escape_string($conn,INPUT_REQUEST['email']);
                           $password = mysqli_real_escape_string(£conn, INPUT_REQUEST['psw']);

                           // Attempt insert query execution
                           $sql = "INSERT INTO user (first_name,surname,email,password) VALUES ('$fname', '$sname', '$email', '$psw')";
                           if(mysqli_query($conn, $sql)){
                               echo "Records added successfully.";
                           } else{
                               echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                    }
                         ?>
                            