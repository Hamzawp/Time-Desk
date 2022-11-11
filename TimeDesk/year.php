<?php
include"connection.php";
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}


$sql = "SELECT * from studententry";

if ($result = mysqli_query($cond, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    //printf("Total rows in this table :  %d\n", $rowcount);
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla&family=Poor+Story&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <title>Profile</title>
</head>
<body>

  <div class="container">
    <img src="gif.gif" width="90" height="100">
    <p>Welcome <?php echo $_SESSION['username']; ?></p>
    <div class="log">
      <a href="logout.php">Logout </a>
    </div>
  </div>


  <div class="head">
    <h3>SELECT THE YEAR</h3>
  </div>
  
<a href="new_attendence.php">
<div class="home">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <!-- <img src="notice.png" alt=""> -->
    <h1>FE</h1>
    </div>
    <div class="flip-card-back">
    <img src="Welcome.gif" width="300px" height="150px">
    <h2>FE</h2>
    
      <p>Total Strength: <?php echo $rowcount;?></p>
    </div>
  </div>
</div>
</a>

<a href="new_attendence.php">
<div class="home">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <!-- <img src="notice.png" alt=""> -->
    <h1>SE</h1>
    </div>
    <div class="flip-card-back">
    <img src="Welcome.gif" width="300px" height="150px">
    <h2>SE</h2>
    
      <p>Total Strength: <?php echo $rowcount;?></p>
    </div>
  </div>
</div>
</a>

<a href="">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <!-- <img src="notice.png" alt=""> -->
    <h1>TE</h1>
    </div>
    <div class="flip-card-back">
    <img src="Welcome.gif" width="300px" height="150px">
    <h2>TE</h2>
    
      <p>Total Strength: <?php echo $rowcount;?></p>
    </div>
  </div>
</div>
</a>

<a href="">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <!-- <img src="notice.png" alt=""> -->
    <h1>BE</h1>
    </div>
    <div class="flip-card-back">
    <img src="Welcome.gif" width="300px" height="150px">
    <h2>BE</h2>
    
      <p>Total Strength: <?php echo $rowcount;?></p>
    </div>
  </div>
</div>
</div>
</body>
</html>
</a>

<style>
body {
  background: #454ea0;  
  font-family: Arial, Helvetica, sans-serif;
}

.container
{
 
 display: flex;
 align-items: center;
 height: 100px;
 width: 100%;
 background-color: white;
 border-radius: 3px;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
 /* box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; */
}

.container p
{
  margin-left: 3%;
  color:#063a76;
  font-size: 3.5rem;
  font-family: 'Karla', sans-serif;
  font-family: 'Poor Story', cursive;
  font-family: 'Roboto', sans-serif;
  font-family: 'Rubik Bubbles', cursive;
  animation: headbox-anim 1s ease-in-out;
}

.log
{
  width: 85px;
  height: 23px;
 align-items: center;
  border-radius: 15px;
  margin-left: 0%;
  /* margin-top: -14.5%; */
}
@keyframes headbox-anim {
    0%{
        transform: skewX(0deg) translateX(750px);    
       }
    
    100%{
      transform: skew(0deg);
    }
}
.log a
{
  margin-left: 58vw;
  padding: 10px 15px 10px 15px;
  font-size:1.4rem;
  text-decoration: none;
  
  color: white;
  font-weight: 600;
  background-color: #063a76;
  border-radius: 15px;
}


.head
{
  margin-top: 5%;
  /* margin-left: 32%; */
  font-size: 2rem;
  color:#fff;
  text-align: center;
}
.home
{
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
}
.flip-card
{
  align-items: center;
  text-align: center;
  justify-content: center;
    padding:50px;
    margin-top: 5%;
    /* margin-left: 35%; */
    background-color: transparent;
    width: 300px;
    height: 300px;
    perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}
.flip-card-front i{
    margin-top: 5%;
}
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 3px;
}

.flip-card-front {
  background-color: #d9d9d9;
  color: black;

}
.flip-card-front h1
{
  font-family: 'Cairo', sans-serif;
font-family: 'Karla', sans-serif;
font-family: 'Poor Story', cursive;
font-family: 'Roboto', sans-serif;
font-family: 'Rubik Bubbles', cursive;
  font-size: 3rem;
  margin-top: 40%;
  color: #454ea0;
}

.flip-card-back {
  background-color: #454ea0;
  color: white;
  transform: rotateY(180deg);
  
}
.flip-card-back h1
{
    margin-top:10%;
    font-size: 2rem;
}
.flip-card-back p
{
    margin-top:10%;
    font-size: 1.5rem;
}


</style>