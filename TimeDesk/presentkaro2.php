<?php
include 'connection.php';
                     
//  $selectquery = "select * from studententry1";

//  $query = mysqli_query($cond,$selectquery);
// //$num = mysqli_num_rows($query);
// $res = mysqli_fetch_array($query);
$id = $_GET['idth'];
                        // $idfname = $_GET['fnameid'];
                        // $idlname = $_GET['lnameid'];
                        // $idemail = $_GET['emailid'];
                        echo "<script>alert('$id');
                        </script>";

                            // $pfname = $idfname;
                            // $plname = $idlname;
                            // $prollno = $ides;
                            // $pemailid = $idemail;
                            $status_pre = "PRESENT";
                            //$insertquery = "insert into studententry1(fname,lname,rollno,email) values('$pfname','$plname','$prollno','$pemailid')";
                            $sql = "UPDATE studententry2 SET current_status = 'PRESENT'  WHERE rollno = '$id'";
                            $res = mysqli_query($cond,$sql);
                            // if (mysqli_query($cond, $sql)) {
                            //     echo "Record updated successfully";
                            // } else {
                            //     echo "Error updating record: " . mysqli_error($cond);
                            // }
                     
                     header('location: display2.php');
                    
                    ?>