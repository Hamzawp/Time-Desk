<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style_admin.css">
    <link rel="stylesheet" href="navstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
         integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
    <title>Admin</title>
</head>
<body style="background-color: whitesmoke;">
  <div class="navbar" style="padding-bottom: 80px ;">
    <div class="heading-logo" style="align-items: center; margin-top: 0.2%; height: 25px; margin-right: 0;">
        <img src="logo_MPR.png" alt="" width="70" height="70" style="margin-top: 3px;">
        <h1 style="margin-top: 15px;"> TimeDesk</h1>
    </div>
    <div class="navtabs" style="margin-left: 10vw;">
        <!-- <a href="" class="navbtn" style="margin-top: 10px;margin-left: 0;">About Us</a>
        <a href="" class="navbtn" style="margin-top: 10px; margin-right: 20px;">Contact Us</a> -->
       
            <a href="logout.php" style="margin-top: 0px; margin-right: 20px; border-radius: 3px;">Logout </a>
      
        
    </div>
</div>

    <div class="home-page">
        <div class="login-box" style="height: 75vh; border-radius: 5px; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
            <h2>ADD NEW TEACHER</h2>
            <form method="post" action="#">
                    <div class="user-box">
                        <input type="text" id="addTxt1" name="t_name" required="">
                        <label>Enter Name:</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="addTxt2" name="t_desg" required="">
                        <label>Enter Designation:</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="addTxt3" name="t_emailid" required="">
                        <label>Enter Email ID:</label>
                    </div>
                    <div class="user-box">
                        <input type="password" id="addTxt4" name="t_pass" required="">
                        <label>Password</label>
                    </div>
                    <input type="submit" name="submit" value="SUBMIT" id="submit-btn" style="margin-top:15px ; padding: 10px 15px 10px 15px; background-color:#454ea0; color: white; border: none; border-radius: 5px;">
                    <!-- <input type="submit" name="submit"<a href="#" id="submit-btn" >
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </a> -->
            </form>
          </div>

          <div class="display" style="margin-top: 6vh;height: 75vh;margin-left: 32vw; width:66vw; border-radius: 5px;  box-shadow: none;">
            <div class="text" style="text-align: center;">
                <h2 style="margin-left: 85px; margin-top: 3px; ">FACULTIES</h2>
                <div class="search-box">
                    <button class="btn-search"><i class="fas fa-search"></i></button>
                    <input type="text" class="input-search" placeholder="Type to Search.." id="searchTxt">
                  </div>
            </div>
            <div class="parentdiv" style="overflow-y: auto;
    overflow-x: hidden;">
                <div id="notes" class="row container-fluid" style="margin-top: 20px; margin-left: 40px; margin-bottom:10px;"></div>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
    <script>
                        console.log("Welcome to my notes");
                                showNotes();

                                let addBtn = document.getElementById("submit-btn");
                                addBtn.addEventListener("click", function (e) {
                                let addTxt1 = document.getElementById("addTxt1");
                                let addTxt2 = document.getElementById("addTxt2");
                                let addTxt3 = document.getElementById("addTxt3");
                                let addTxt4 = document.getElementById("addTxt4");
                                if(!addTxt1.value || !addTxt2.value || !addTxt3.value || !addTxt4.value)
                                    {
                                        alert("Please enter details")
                                }
                                    else{
                                let notes = localStorage.getItem("notes");
                                if (notes == null) {
                                    notesObj = [];
                                }
                                else {
                                    notesObj = JSON.parse(notes);
                                }
                                let myObj = {
                                    Name : addTxt1.value,
                                    Designation : addTxt2.value,
                                    Email : addTxt3.value,
                                    password : addTxt4.value
                                }
                                notesObj.push(myObj);
                                localStorage.setItem("notes", JSON.stringify(notesObj));
                                // addTxt1.value = "";
                                // addTxt2.value = "";
                                // addTxt3.value = "";
                                // addTxt4.value = "";
                                showNotes();}
                                });

                                function showNotes() {
                                let notes = localStorage.getItem("notes");
                                if (notes == null) {
                                    notesObj = [];
                                }
                                else {
                                    notesObj = JSON.parse(notes);
                                }
                                console.log(notesObj);
                                
                                let html = "";
                                notesObj.forEach(function (element ,index) {
                                    html += `
                                    <div class="notecard my-2 mx-2 card" style="width: 18rem; border-radius: 3px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">      ${element.Name}</h5>
                                                    <p class="card-text">Designation: ${element.Designation}</p>
                                                    <p class="card-text">E-mail:      ${element.Email}</p>
                                                    <button id="${index}" onclick="deleteNote(this.id)" class="btn btn-primary" style=" border: none;   background-color: rgb(230 67 53);">Delete</button>
                                                </div>
                                    </div>`
                                });
                                //console.log(html);
                                let noteselm = document.getElementById("notes");
                                if (notesObj.length != 0) {
                                    noteselm.innerHTML = html;
                                }
                                else{
                                    noteselm.innerHTML = `<h4 style='color: white; font-size:1.8rem; margin-top: 3%;'>Nothing to display</h4>`;
                                }
                                }

                                function deleteNote(index){
                                let notes = localStorage.getItem("notes");
                                if (notes == null) {
                                    notesObj = [];
                                }
                                else {
                                    notesObj = JSON.parse(notes);
                                }
                                notesObj.splice(index,1);
                                localStorage.setItem("notes", JSON.stringify(notesObj));
                                showNotes();
                                }

                                let search = document.getElementById('searchTxt');
                                search.addEventListener("input",function(){
                                let inputVal = search.value;
                                let noteCards = document.getElementsByClassName('notecard');
                                Array.from(noteCards).forEach(function(element){
                                    let cardTxt = element.getElementsByTagName("h5")[0].innerText;
                                    if(cardTxt.includes(inputVal)){
                                    element.style.display="block";
                                    }
                                    else{
                                    element.style.display="none";
                                    }
                                });
                                });
    </script>
</body>
</html>
<?php


                include 'connectadmin.php';

                //Inserting DATA In mySQL
                
               
               
                if(isset($_POST['submit'])) //It is super global variable that is used to collect form data after submitting an HTML form with method = post
                {
                    $pfname = $_POST['t_name'];
                    $pdesg = $_POST['t_desg'];
                    $ppass = $_POST['t_pass'];
                    $pemailid = $_POST['t_emailid'];
                   
                    $insertquery = "insert into feteachers(username,password,email,designation) values('$pfname','$ppass','$pemailid','$pdesg')";


                    $res = mysqli_query($condn,$insertquery);
                  
               
                
                }

?>