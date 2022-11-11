<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final report</title>
    <link rel="stylesheet" href="attend.css">
    <link rel="stylesheet" href="style_display.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->

<style>
    .pres-btn, .abse-btn:hover{
    cursor: pointer;
   
}

</style>
</head>
<body>
<div class="navbar">
        <div class="heading-logo">
            <img src="logo_MPR.png" alt="" width="65" height="65">
            <h1> TimeDesk</h1>
        </div>
        <div class="navtabs" style="margin-left: 69%;">
            <!-- <a href="" class="navbtn">About Us</a> -->
            <a href="timedesk.php" class="navbtn">About Us</a>
            
        </div>
    </div>

<div class="section">
<!--<div class="image">
            <img src="ATTENDANCE.png" alt="" width="360" height="280">
        </div>-->
    <div class="attendance-sheet">
        <div class="parental" style="display: flex; align-items: center;">
            <div style="margin-top: 2%;">
            <h2><a href="resetkardo1.php" class="heading-primary-sub" style=" margin-bottom: -10%;  margin-left: -220%; font-size: 1rem;margin-top:30%; border:1px solid #454ea0; letter-spacing: 2px; background-color:rgb(255, 248, 220); color:#454ea0; font-weight:bold; cursor:pointer;text-decoration:none; border-radius:5px; padding: 10px 10px 10px 10px;">RESET</a></h2>
            </div>

            <div class="as-heading" style="margin-bottom: 2vh;">
                <h2 class="heading-primary-sub">WELCOME TO CLASS - C1</h2>
            </div>

            <div>
            <h2><button id="heading-primary-subs" style="margin-left: 200%; margin-top: 16%; border:1px solid #454ea0; letter-spacing: 2px; background-color:#69fd68; color:#fff; font-weight:bold; cursor:pointer; border-radius:5px; padding: 10px 15px 10px 15px;">CONFIRM</button></h2>
            </div>
        </div>
            <div class="as-report" style="overflow-y: scroll; margin-top: none;">
                <table id="as-table" >
                    <!--<th>Attendence Report</th>-->
                    <!-- <thead style="border: none; background-color: #f5f5f5;">
                        <tr style="border: none;">
                            <td colspan="6" style="border: none;">C3</td>
                        </tr>
                    </thead> -->
                    <thead style="position:static;">
                    <tr>
                        <th style="position: sticky;">Roll No</th>
                        <th style="position: sticky;">First Name</th>
                        <th style="position: sticky;">Last Name</th>
                        <th style="position: sticky;">P/A</th>
                        <th style="position: sticky;">Status</th>
                        <th style="position: sticky;">Delete</th>
                    </tr>
                    </thead>
                    <tbody >
                    
<?php
    include 'connection.php';
    session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
    $selectquery = "select * from studententry1";
    $query = mysqli_query($cond,$selectquery);
    $num = mysqli_num_rows($query);
    while($res = mysqli_fetch_array($query)){
        ?>
        <tr>
                <td id="rollno"><?php echo $res['rollno']; ?></td>
                <td><?php echo $res['fname']; ?></td>
                <td><?php echo $res['lname']; ?></td>
                <td id="special" style="padding-top: 2%; padding-bottom: 2%;">
                
               
                <form method="post">
                    <a href="presentkaro1.php?idth=<?php echo $res['rollno']?>" class="pres-btn" style="
                                                    text-decoration:none;
                                                 
                                                    padding: 10px;
                                                    width: 7vw;
                                                    background-color: rgb(120, 237, 118);
                                                    border: none;
                                                    text-transform:capitalize;
                                                    border-radius: 4px;
                                                    color: white;
                                                    font-weight: bold;" onclick="myFunction(event)" name="present-btn">Present </a>
                    <a href="absentkaro1.php?idth=<?php echo $res['rollno']?>" class="abse-btn" style="
                                                     text-decoration:none;
                                                    padding: 10px;
                                                    margin-left:15px ;
                                                    width: 7vw;
                                                    background-color: rgb(237, 138, 118);
                                                    border: none;
                                                    text-transform:capitalize;
                                                    border-radius: 4px;
                                                    color: white;
                                                    font-weight: bold;" onclick="myFunc(event)">Absent </a>
                                                    </form>
                </td>
                <td><p class="status-text" name="para"><?php echo $res['current_status']?></p></td>
                <!-- <td><button class="btnDelete" onclick="deleterow()" style="border:none; background-color:rgb(230 67 53); color:#fff; font-weight:bold; cursor:pointer; border-radius:5px; padding: 10px 15px 10px 15px;">Update</button></td> -->
                <td><a href="deletekardo1.php?idth=<?php echo $res['rollno']?>" class="btnDeletee"  style="border:none; font-size: 1rem; letter-spacing: 1px; width: 20px; background-color:rgb(230 67 53); color:#fff; font-weight:bold; cursor:pointer; border-radius:5px; padding: 10px 10px 10px 10px;text-decoration:none;"><i class="fa-regular fa-trash-can"></i></a></td>
                <!-- <td><button class="btnDeletee"  style="border:none; background-color:rgb(230 67 53); color:#fff; font-weight:bold; cursor:pointer; border-radius:5px; padding: 10px 15px 10px 15px;">Delete</a></td> -->
        </tr>
<?php
    }
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#heading-primary-subs", function () {
            html2canvas($('#as-table')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("C1-Attendance-Report.pdf");
                }
            });
        });
</script>        
                    </tbody>
                </table>
            </div>
        </div>
        </div>
</body>


</html>


