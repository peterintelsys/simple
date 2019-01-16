// Dropdown js
var dropBtns = document.querySelectorAll('.drop-btn');
var dropCon = document.querySelectorAll('.drop-content');
var boldBtn = document.querySelectorAll('.drop-btn-active');
var activeModal = document.getElementById(modal1);

function removeActive(){
    for (var i = 0; i < dropCon.length; i++){
    dropCon[i].classList.remove('active');
  }
}

dropBtns.forEach(function(btn){

btn.addEventListener('click', function(e) {

    var dropContent = e.target.nextElementSibling;

    e.preventDefault();

    removeActive();

    dropContent.classList.add('active');

    e.stopPropagation();

  });

});

window.addEventListener("click",function(event){
  if (event.target != dropBtns){
    removeActive();
  }
 
});

// Modals

function openModal(el){
  var elem = document.getElementById(el);
    elem.classList.toggle('open-modal');
}


var activeModal = document.querySelectorAll('.modal');

for (var i = 0; i < activeModal.length; i++){

activeModal[i].addEventListener("click", function(e){

  e.target.classList.remove('open-modal');

});
}


//show display:none somewhere using id
function showid(el){

  var elem = document.getElementById(el);

	elem.classList.toggle('active');

}


function display(el){

	if (el.style.display === 'block'){
  		el.style.display = 'none';
  	}else{
  		el.style.display = 'block';
  	}

}

function test(){
var el1 = document.getElementById("navi");
el1.classList.toggle('active-flex');
}

function change(){

  var el = document.getElementById("top-bar");
  //var el1 = document.getElementById("navi");

  el.classList.toggle('change');
  setTimeout(test, 300);
  
}

function displayTrans(el){
	if (el.style.maxHeight){
      el.style.maxHeight = null;
    } else {
      el.style.maxHeight = el.scrollHeight + "px";
    }

}


var accordianBtn = document.querySelectorAll('.accordian-header');

for (var i = 0; i < accordianBtn.length; i++) {

  accordianBtn[i].addEventListener("click", function(e){ 

  	e.classList.toggle('accordian-header-active');

  	var panel = e.nextElementSibling;

  	panel.addEventListener('click', displayTrans(panel));

   });
}