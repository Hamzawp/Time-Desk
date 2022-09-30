console.log("Welcome to my notes");
showNotes();

let addBtn = document.getElementById("submit-btn");
addBtn.addEventListener("click", function (e) {
  let addTxt1 = document.getElementById("addTxt1");
  let addTxt2 = document.getElementById("addTxt2");
  let addTxt3 = document.getElementById("addTxt3");
  let addTxt4 = document.getElementById("addTxt4");
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
  addTxt1.value = "";
  addTxt2.value = "";
  addTxt3.value = "";
  addTxt4.value = "";
  showNotes();
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
    <div class="notecard my-2 mx-2 card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">${element.Name}</h5>
                    <p class="card-text">${element.Designation}</p>
                    <p class="card-text">${element.Email}</p>
                    <button id="${index}" onclick="deleteNote(this.id)" class="btn btn-primary">Delete</button>
                </div>
    </div>`
  });
  let noteselm = document.getElementById('notes');
  if (notesObj.length != 0) {
    noteselm.innerHTML = html;
  }
  else{
    noteselm.innerHTML = `<h4 style='color: black;'>Nothing to display</h4>`;
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
