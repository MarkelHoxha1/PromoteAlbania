<?php
include('dbcon.php');
include('session.php');
include('user_name.php');


if(isset($_GET['SfidaId']))

{ $mysqli = new mysqli("localhost", "root", "", "promotealbania");

            $sfida = $_GET['SfidaId'];

            $insert = "insert into merr_pjese (SfidaId,UserID) values 
                        ('$sfida','$userid')";

                    $insert = $mysqli->query($insert);
                    if($insert)
                    {
                         echo "<script>alert('Ju sapo u bete pjese e grupit!')</script>";
                          echo "<script>window.open('shiko_sfida1.php','_self')</script>";

                    }
                    else 
                    {
                         echo "<script>alert('Blerja nuk u be!')</script>".mysql_error();
                    }
                }





?>